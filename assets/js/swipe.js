jQuery('.nav').swipe({
               swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
               console.log(direction);
               if (direction == 'up') {
                     jQuery('#menuToggle').click();
               }
                },
                 triggerOnTouchEnd:true,
                 threshold:40 // сработает через 20 пикселей
               });

                jQuery('.navbar-header').swipe({
               swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
               console.log(direction);
               if (direction == 'down') {
                     jQuery('#menuToggle').click();
               }
                },
                 triggerOnTouchEnd:true,
                 threshold:100 // сработает через 20 пикселей
               });
