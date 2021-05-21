window.onload = () => {
	curvedBottomNavitage();
	//autoAnimated();
};

function scroll() {
	const config    = { bubbles: true, cancelable: true },
				eventUp   = new Event('scrolldown', config),
				eventDown = new Event('scrollup', config); 
	
	let up 	 = true,
			down = true,
			last = 0;
	const callback = function() {
		let pos = this.scrollY;
		
		// down
		if (last < pos && down) {
			down = false;
			up = true;
			document.dispatchEvent(eventUp);
		}
		
		// up
		if (last > pos && up) {
			up = false;
			down = true;
			document.dispatchEvent(eventDown);
		}
		
		last = pos;
	}
	return window.addEventListener('scroll', callback);
}

function delay(fn, delay) {
	return setTimeout(fn ,delay);
}

function hasClass(element, className) {
	return element.classList.contains(className);
}

function addClass(element, className) {
	return element.classList.add(className);	
}

function removeClass(element, className) {
	return element.classList.remove(className);
}

function toggleClass(element, className) {
	return element.classList.toggle(className);
}

function toggleAttr(element, attr) {
	return element.toggleAttribute(attr);
}

function addClassWithDelay(element, className, delay) {
	return setTimeout(() => addClass(element, className), delay);
}

function removeClassWithDelay(element, className, delay) {
	return setTimeout(() => removeClass(element, className), delay);
}


/**
 * Cubic Bezier Curver for Animation in based time
 * 
 * For each point most be range beteewn [0, 1]
 * 
 * @param {float} p0
 * @param {float} p1 
 * @param {float} p2 
 * @param {float} p3
 * @return {float} [0,1] 
 */
function cubic_bezier(p0=0, p1=0, p2=0, p3=0) {
	return (t=0) => ((Math.pow((1 -t), 3) * p0) + (3 * Math.pow((1 - t), 2) * t * p1) + (3 * (1 - t) * Math.pow(t, 2) * p2) + (Math.pow(t, 3) * p3));
}

/**
 * Transition Animate
 * 
 * @param {float} time
 * @param {float} start 
 * @param {float} end
 * @param {string} timing-function as 'tfn'
 * 
 */
function transition(time, start=0, end=0, tfn='linear', fn=null, fnEnd=null) {
	const frames = parseInt(60 * time);

	let rID  = null;
	let frm  = 0;
	
	let strt = Math.abs(start), 
			en   = Math.abs(end),
			dir  = 1;

	// order parameters
	if (start > end) {
		strt = end;
		en   = start;
		dir  = 0;
	}
	
	// timing functions by default
	const __tfn = {
		'linear': p => p,
		'ease': cubic_bezier(0.25, 0.1, 0.25, 1),
		'ease-in': cubic_bezier(0.42, 0, 1, 1),
		'ease-out': cubic_bezier(0, 0, 0.58, 1),
		'ease-in-out': cubic_bezier(0.42, 0, 0.58, 1)
	};

	// dispatch event or callback
	function dispatch(prgs, trnst) {
		if (fn instanceof Function)
			return fn(prgs, trnst);

		const option = { 
			bubbles: true, 
			cancelable: false, 
			detail: {
				progress: prgs, 
				transition: trnst
			} 
		};
		const event = new CustomEvent('transition', option);

		dispatchEvent(event);
	}

	function dispatchEnd() {
		if (fnEnd instanceof Function)
		return fnEnd();

		const event = new Event('transitionEnd');

		dispatchEvent(event);
	}

	// execute timing function if is default or cubic_bezier function
	function timingFunction(p) {
		if (typeof tfn !== 'function' && typeof tfn !== 'string')
			throw new Error('Error timing function (tfn) is not typing Function or String');

		let pt, tr;

		if (typeof tfn === 'function')
			pt = tfn(p);
		else 
			pt = __tfn[tfn](p);
	
		tr = (p -  pt) + p;

		if (tr > 0 && tr < 1)
			return tr;

		if (tr >= 1)
			return 1;

		return 0;
	}

	// loop request animation frames
	function updateScreen() {
		let P  = ++frm/frames;

		P = timingFunction(P);

		let trns = (en - strt) * P;

		trns = dir ? trns + strt : trns - en;

		dispatch(P * 100, trns);

		if (!(frm%frames)) {
			dispatchEnd();
			return cancelAnimationFrame(rID);
		}

		rID = requestAnimationFrame(updateScreen);
	}
	return rID = requestAnimationFrame(updateScreen);
}

/**
 * 
 */
const curvedBottomNavitage = (function() {
	const SVGWidthMiddle = 3222/2;
	const style = document.body.style;
	const cbn = document.querySelector('#curved-bottom-navigate');
	const btns = cbn.querySelectorAll('li > div');

	let pos = 0, animate = false;
	const arrPosition = [];

	function calculePositionBtn(btn) {
		const windowWidth = document.body.getBoundingClientRect().width;
		const navbar = document.querySelector('#curved-bottom-navigate').getBoundingClientRect();
		const rect = btn.getBoundingClientRect();
		
		//console.log(rect.left)
		
// 		let offset = 0, middle = 0, move = 0;
// 		offset = SVGWidthMiddle - (rect.width / 2);
// 		middle = (navbar.left + rect.left) + (rect.width / 2);
// 		move = ((SVGWidthMiddle - (offset + middle)) + offset) * -1;
		
		
		let offset = 0, middle = 0, move = 0;
		offset = SVGWidthMiddle - (windowWidth / 2);
		middle = rect.left + (rect.width / 2) - navbar.left;
		move = ((SVGWidthMiddle - (offset + middle)) + offset) * -1;
		
		return {
			position: move,
			offsetBefore: move - (rect.width / 2), 
			offsetAfter: move + (rect.width / 2) 
		};
	};

	function addListenerClick(position) {
		return (e) => {
			e.preventDefault();
			e.stopPropagation();

			slide(position);
		}
	};

	function setArrPosition(btn, position) {
		arrPosition[position] = calculePositionBtn(btn);
	}

	function toggle(element, className) {
		if (hasClass(element, classList))
			removeClassWithDelay(element, className, timeout);
		
		addClass(element, className);
	}

	function slide(position=0) {
		const timeout = 150;
		let start = 1, end = 1, next, op = true;

		if (animate)
			return;

		start = arrPosition[pos];
		end = arrPosition[position];
		
		removeClassWithDelay(btns[pos], 'active', timeout);
		removeClass(btns[pos], 'fadeOut');
		
		if (position > (pos +1)) {
			next = pos +1;
			op = true;
		}

		if (position < (pos -1)) {
			next = pos -1;
			op = false;
		}

		transition(0.4, start.position, end.position, 'ease', (prgs, move) => {
			const m = (move * -1);

			animate = true;

			if (next) {
				const nextSibling = arrPosition[next], 
							on  = op ? nextSibling.offsetAfter : nextSibling.offsetBefore,
							off = op ? nextSibling.offsetBefore : nextSibling.offsetAfter;

				if ((on > m && off < m && op) || (on < m && off > m && !op))
					addClass(btns[next], 'fade');

				if ((off < m && on < m && op) || (off > m && on > m && !op)) {
					removeClassWithDelay(btns[next], 'fade', timeout);

					if (next < (position -1))
						next++;

					if (next > (position + 1))
						next--;
				}

			}

			const fadeOutOn =  op ? arrPosition[position].offsetAfter : arrPosition[position].offsetBefore,
						fadeOutOff = op ? arrPosition[position].offsetBefore : arrPosition[position].offsetAfter;

			if ((fadeOutOn > m && fadeOutOff < m && op) || (fadeOutOn < m && fadeOutOff > m && !op))
				addClass(btns[position], 'fadeOut');

			style.setProperty('--slide',  m + 'px');
		}, 
		() => {
			addClass(btns[position], 'active');
			animate = false;
			pos = position;
		});
	};

	window.addEventListener('resize', () => {
		btns.forEach((btn, i) => setArrPosition(btn, i));
		slide(pos);
	});

	btns.forEach((btn, i) => {
		btn.addEventListener('click', addListenerClick(i));
		setArrPosition(btn, i);
	});

	slide(0);
});


