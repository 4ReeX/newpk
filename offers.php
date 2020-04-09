<!DOCTYPE html>
<html class="no-js" lang="">
<?php include 'head.php'; ?>
<body onload="openTabs1();" class="bodyOffers">
    <!-- Left Panel -->
    <?php  //говорит нам что начинается php код
include 'sidebar.php';  //любой файл который мы хотим подключить в этой части документа
?>
        <!-- Left Panel -->
        <div id="right-panel" class="right-panel">
            <!-- Header-->
            <?php  //говорит нам что начинается php код
include 'header.php';  //любой файл который мы хотим подключить в этой части документа
?>
                <!-- Header-->





                <div class="content">
                    <div class="card no-mb">
                        <div class="card-header">
                            <nav class="navitab">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active show" data-toggle="tab" href="#" role="tab" onclick="openTabs1();" aria-selected="true">ВСЕ</a>
                        <a class="nav-item nav-link" id="start-tab" data-toggle="tab" href="#" role="tab" aria-controls="custom-nav-start" aria-selected="false" onclick="openTabs2();">ПОДКЛЮЧЕННЫЕ</a>
                        <a class="nav-item nav-link" id="oss-tab" data-toggle="tab" href="#" role="tab" aria-controls="custom-nav-oss" aria-selected="false" onclick="openTabs3();">СМАРТЛИНКИ</a>
                        <a href="http://lpt.playmobile.ru/offers/skrom/affimob-redis/pk2/operator_subnet.xlsx" class="diapazon float-right"> Получить диапазон IP <i class="ti ti-world"></i></a>
                        </div>

                        </nav>

                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                    <div class="animated fadeIn">

                        <div class="custom-tab">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade active show" id="first" style="display: block;    overflow-x: auto;    width: 100%;">
                                    <!--start card-->
                                    <div class="card no-bor-rad-top">
                                        <div class="card-body fortabs">
                                            <section id="filters">
                                                <div class="form-group">
                                                    <div class="checkboxes">
                                                        <div class="custom-mselect margin5">
                                                            <label for="offer-new" class="name-check">NEW!</label>
                                                            <input type="checkbox" checked="checked" id="offer-new" class="ios" />
                                                        </div>
                                                        <div class="custom-mselect margin5">
                                                            <label for="offer-hot" class="name-check">HOT!</label>
                                                            <input type="checkbox" id="offer-hot" class="ios" />
                                                        </div>
                                                        <div class="custom-mselect margin5">
                                                            <label for="only-checked" class="name-check"><i class="ti ti-check-box"></i><i class="ti ti-check-box"></i><i class="ti ti-check-box"></i></label>
                                                            <input type="checkbox" id="only-checked" class="ios" />
                                                        </div>
                                                    </div>
                                                    <div class="inputs-block">
                                                        <div class="col">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Операторы</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">
                                                                                    <div class=" css-1uccc91-singleValue">Не выбрано</div>
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6"><span class=" css-1okebmr-indicatorSeparator"></span>
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Страны</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">
                                                                                    <div class=" css-1uccc91-singleValue">Не выбрано</div>
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6"><span class=" css-1okebmr-indicatorSeparator"></span>
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Тематика</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">
                                                                                    <div class=" css-1uccc91-singleValue">Не выбрано</div>
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6"><span class=" css-1okebmr-indicatorSeparator"></span>
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Тип выплаты</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">
                                                                                    <div class=" css-1uccc91-singleValue">Не выбрано</div>
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6"><span class=" css-1okebmr-indicatorSeparator"></span>
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!---end card-->
                                    <div class="card no-bor-rad-top">
                                        
                                        <div class="card-body">
                                            <section id="offers-list">
                                                <?php include 'offer-block.php'; ?>
                                            </section>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade show" id="second" style="display: block;    overflow-x: auto;    width: 100%;">
                                    <!--start card-->
                                    <div class="card card no-bor-rad-top">
                                        <div class="card-body">
                                            <section id="filters">
                                                <div class="form-group">
                                                    <div class="checkboxes">
                                                        <div class="custom-mselect margin5">
                                                            <label for="offer-new" class="name-check">NEW!</label>
                                                            <input type="checkbox" checked="checked" id="offer-new" class="ios" />
                                                        </div>
                                                        <div class="custom-mselect margin5">
                                                            <label for="offer-hot" class="name-check">HOT!</label>
                                                            <input type="checkbox" id="offer-hot" class="ios" />
                                                        </div>
                                                    </div>
                                                    <div class="inputs-block">
                                                        <div class="col">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Операторы</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">
                                                                                    <div class=" css-1uccc91-singleValue">Не выбрано</div>
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6"><span class=" css-1okebmr-indicatorSeparator"></span>
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Страны</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">
                                                                                    <div class=" css-1uccc91-singleValue">Не выбрано</div>
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6"><span class=" css-1okebmr-indicatorSeparator"></span>
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Тематика</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">
                                                                                    <div class=" css-1uccc91-singleValue">Не выбрано</div>
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6"><span class=" css-1okebmr-indicatorSeparator"></span>
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Тип выплаты</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">
                                                                                    <div class=" css-1uccc91-singleValue">Не выбрано</div>
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6"><span class=" css-1okebmr-indicatorSeparator"></span>
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Статус</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">
                                                                                    <div class=" css-1uccc91-singleValue">Не выбрано</div>
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6"><span class=" css-1okebmr-indicatorSeparator"></span>
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!---end card-->
                                    <div class="card card no-bor-rad-top">
                                        <div class="card-body">
                                            <div class="responsive-block" id="fullWidth">
                                                <div class="table-responsive" id="hiden-offer-table">
                                                    <div class="table-responsive" id="hiden-offer-table">
                                                        <table class="table simple-table align-left no-wrap table-sm" id="table-offers">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Название оффера</th>
                                                                    <th>Промо</th>
                                                                    <th>Тематика</th>
                                                                    <th>ОСС</th>
                                                                    <th>Страна</th>
                                                                    <th>Выплата</th>
                                                                    <th>Статус</th>
                                                                    <th style="min-width: 60px; width: 60px;"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11616 | Eromix 229 20/1</td>
                                                                    <td><img id="Popover11616" src="https://affimob.com/pictures/offers/offer-116161.jpg" alt="" class="offers-min"></td>
                                                                    <td>Адалт</td>
                                                                    <td class="td-operator"><img src="data:image/png;base64,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" alt=""></td>
                                                                    <td>Россия</td>
                                                                    <td><span>3.83</span>
                                                                        <br><span style="font-size: 10px;">ребилл</span></td>
                                                                    <td><i id="PopoverIconStatus11616" class="fa fa-dot-circle-o" color="#ff9f43" style="color: rgb(255, 159, 67); font-size: 22px;"></i></td>
                                                                    <td><i class="ti ti-link" style="color: rgb(0, 123, 255);" data-toggle="modal" data-target="#mediumModal"></i><i id="PopoverIconTerm11616" class="ti ti-info-alt"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11614 | Erolife 210 20/1</td>
                                                                    <td><img id="Popover11614" src="https://affimob.com/pictures/offers/offer-11614.jpg" alt="" class="offers-min"></td>
                                                                    <td>Адалт</td>
                                                                    <td class="td-operator"><img src="data:image/png;base64,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" alt=""></td>
                                                                    <td>Россия</td>
                                                                    <td><span>3.83</span>
                                                                        <br><span style="font-size: 10px;">ребилл</span></td>
                                                                    <td><i id="PopoverIconStatus11614" class="fa fa-dot-circle-o" color="#ff9f43" style="color: rgb(255, 159, 67); font-size: 22px;"></i></td>
                                                                    <td><i class="ti ti-link" style="color: rgb(0, 123, 255);" data-toggle="modal" data-target="#mediumModal"></i><i id="PopoverIconTerm11614" class="ti ti-info-alt"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11569 | Erolife 168 20/1</td>
                                                                    <td><img id="Popover11569" src="https://affimob.com/pictures/offers/offer-115692.jpg" alt="" class="offers-min"></td>
                                                                    <td>Адалт</td>
                                                                    <td class="td-operator"><img src="data:image/png;base64,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" alt=""></td>
                                                                    <td>Россия</td>
                                                                    <td><span>3.83</span>
                                                                        <br><span style="font-size: 10px;">ребилл</span></td>
                                                                    <td><i id="PopoverIconStatus11569" class="fa fa-dot-circle-o" color="#ff9f43" style="color: rgb(255, 159, 67); font-size: 22px;"></i></td>
                                                                    <td><i class="ti ti-link" style="color: rgb(0, 123, 255);" data-toggle="modal" data-target="#mediumModal"></i><i id="PopoverIconTerm11569" class="ti ti-info-alt"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11322 | 11322 Bwatch 30/1 Trial1</td>
                                                                    <td><img id="Popover11322" src="https://affimob.com/pictures/offers/offer-11322.jpg" alt="" class="offers-min"></td>
                                                                    <td>Видео</td>
                                                                    <td class="td-operator"><img src="data:image/png;base64,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" alt=""></td>
                                                                    <td>Россия</td>
                                                                    <td><span></span>
                                                                        <br><span style="font-size: 10px;">ребилл</span></td>
                                                                    <td><i id="PopoverIconStatus11322" class="fa fa-dot-circle-o" color="#ff9f43" style="color: rgb(255, 159, 67); font-size: 22px;"></i></td>
                                                                    <td><i class="ti ti-link" style="color: rgb(0, 123, 255);" data-toggle="modal" data-target="#mediumModal"></i><i id="PopoverIconTerm11322" class="ti ti-info-alt"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11321 | Blook 30/1 Trial1</td>
                                                                    <td><img id="Popover11321" src="https://affimob.com/pictures/offers/offer-113211.jpg" alt="" class="offers-min"></td>
                                                                    <td>Видео</td>
                                                                    <td class="td-operator"><img src="data:image/png;base64,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" alt=""></td>
                                                                    <td>Россия</td>
                                                                    <td><span></span>
                                                                        <br><span style="font-size: 10px;">ребилл</span></td>
                                                                    <td><i id="PopoverIconStatus11321" class="fa fa-dot-circle-o" color="#ff9f43" style="color: rgb(255, 159, 67); font-size: 22px;"></i></td>
                                                                    <td><i class="ti ti-link" style="color: rgb(0, 123, 255);" data-toggle="modal" data-target="#mediumModal"></i><i id="PopoverIconTerm11321" class="ti ti-info-alt"></i></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade show" id="third" style="display: block;    overflow-x: auto;    width: 100%;">
                                    <div class="card card no-bor-rad-top">
                                        <div class="card-body">
                                            <section id="filters">
                                                <div class="form-group">
                                                    <div class="inputs-block">
                                                        <div class="col">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Операторы</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">
                                                                                    <div class=" css-1uccc91-singleValue">Не выбрано</div>
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6"><span class=" css-1okebmr-indicatorSeparator"></span>
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Страны</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">
                                                                                    <div class=" css-1uccc91-singleValue">Не выбрано</div>
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6"><span class=" css-1okebmr-indicatorSeparator"></span>
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Тематика</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">
                                                                                    <div class=" css-1uccc91-singleValue">Не выбрано</div>
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6"><span class=" css-1okebmr-indicatorSeparator"></span>
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                    <!----end card-body--->
                                    <div class="card card no-bor-rad-top">
                                        <div class="card-body">
                                            <div class="responsive-block" id="fullWidth2">

                                                <div class="table-responsive" id="smart-table">
                                                    <table class="table simple-table align-left no-wrap table-sm" id="table-offers">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Название смартлинка</th>
                                                                <th>Тематика</th>
                                                                <th>ОСС</th>
                                                                <th>Страны</th>
                                                                <th><i class="ti ti-layers-alt" title="Количество офферов" style="font-size: 16px;"></i></th>
                                                                <th style="min-width: 80px; width: 80px;"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>536 | Beeline Темафон 20062018</td>
                                                                <td>Адалт</td>
                                                                <td class="td-operator inline"><img src="images/beeline.png" alt=""></td>
                                                                <td>Россия</td>
                                                                <td>3</td>
                                                                <td><i class="ti ti-link" style="color: rgb(0, 123, 255);" data-toggle="modal" data-target="#mediumModal"></i><i class="ti ti-pencil" title="Редактировать" style="color: rgb(65, 68, 85);" onclick="redSmLink();"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td>500 | T-click-stark-potok</td>
                                                                <td>Адалт</td>
                                                                <td class="td-operator inline"><img src="images/megafon.png" alt=""></td>
                                                                <td>Россия</td>
                                                                <td>3</td>
                                                                <td><i class="ti ti-link" style="color: rgb(0, 123, 255);" data-toggle="modal" data-target="#mediumModal"></i><i class="ti ti-pencil" title="Редактировать" style="color: rgb(65, 68, 85);" onclick="redSmLink();"></i><i class="ti ti-close" title="Удалить" style="color: rgb(65, 68, 85);"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td>500 | T-click-stark-potok</td>
                                                                <td>Адалт</td>
                                                                <td class="td-operator inline"><img src="images/mts.png" alt=""></td>
                                                                <td>Россия</td>
                                                                <td>3</td>
                                                                <td><i class="ti ti-link" style="color: rgb(0, 123, 255);" data-toggle="modal" data-target="#mediumModal"></i><i class="ti ti-pencil" title="Редактировать" style="color: rgb(65, 68, 85);" onclick="redSmLink();"></i><i class="ti ti-close" title="Удалить" style="color: rgb(65, 68, 85);"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td>500 | T-click-stark-potok</td>
                                                                <td>Адалт</td>
                                                                <td class="td-operator inline"><img src="images/tele2.png" alt=""></td>
                                                                <td>Россия</td>
                                                                <td>3</td>
                                                                <td><i class="ti ti-link" style="color: rgb(0, 123, 255);" data-toggle="modal" data-target="#mediumModal"></i><i class="ti ti-pencil" title="Редактировать" style="color: rgb(65, 68, 85);" onclick="redSmLink();"></i><i class="ti ti-close" title="Удалить" style="color: rgb(65, 68, 85);"></i></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        </div>
        </div>
<?php include 'popup-offer.php'; ?>
<?php include 'popup-link.php'; ?>
<?php include 'scripts.php'; ?>
<script>
	$('.create-links').attr("onclick", "location.href='poluchenie_ssilok.php'")

    
   
</script>
<!--<script>
    $('.ti-link').on('click', function(event) {
        $('#linkPop').show();
    });
</script>-->
</body>

</html>