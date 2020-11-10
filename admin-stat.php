<!DOCTYPE html>
<html class="no-js" lang="">
<?php include 'head.php'; ?>

    <body>
        <!-- Left Panel -->

        <!-- /#left-panel -->
        <?php  //говорит нам что начинается php код
include 'sidebar.php';  //любой файл который мы хотим подключить в этой части документа
?>
            <!-- Left Panel -->

            <!-- Right Panel -->

            <div id="right-panel" class="right-panel">

                <!-- Header-->
                <?php include 'header.php';?>
                    <!-- Header-->

                    <div class="content">
                        <div class="animated fadeIn">
                            <div class="card">

                                <!--<?php include 'card-header.php'; ?>-->
                                <div class="card-header">
                                  <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active show" id="home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true">Статистика</a>
                                                <a class="nav-item nav-link" id="start-tab" data-toggle="tab" href="#custom-nav-start" role="tab" aria-controls="custom-nav-start" aria-selected="false">Анализ трафика</a>
                                            </div>
                                        </nav>
                                </div>

                                    <div class="card-body">
                                        
                                        <div class="tab-content pt-2" id="nav-tabContent">
                                            <div class="tab-pane fade active show" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                                <div class="row">
                                                    <div class="col-lg-2" id="blockInputOffers">
                                                        <div class="jss8">
                                                            <div class=" css-2b097c-container">
                                                                <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                    <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Дата</label>
                                                                    <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                        <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                            <div class="jss10"><span class="ss">29.12.1989 - 11.02.2020</span></div>
                                                                            <div class=" css-1wy0on6">
                                                                                <div aria-hidden="true" class=" css-tlfecz-indicatorContainer"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4" id="blockInputPeriod">
                                                        <div class="jss8">
                                                            <div class=" css-2b097c-container">
                                                                <div class="nowrap-custom">
                                                                    <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="">Период</label>
                                                                    <button class="icon-btn"><i class="date-icon icon-day"></i></button>
                                                                    <button class="icon-btn"><i class="date-icon icon-minus-day"></i></button>
                                                                    <button class="icon-btn"><i class="date-icon icon-2"></i></button>
                                                                    <button class="icon-btn"><i class="date-icon icon-7"></i></button>
                                                                    <!--<button class="icon-btn"><i class="date-icon icon-week"></i></button>-->
                                                                    <!--<button class="icon-btn"><i class="date-icon icon-minus-week"></i></button>-->
                                                                    <button class="icon-btn"><i class="date-icon icon-14"></i></button>
                                                                    <button class="icon-btn"><i class="date-icon icon-m"></i></button>
                                                                    <button class="icon-btn"><i class="date-icon icon-minus-m"></i></button>
                                                                    <button class="icon-btn"><i class="date-icon icon-30"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-12 row">
                                                        <div class="col" id="blockInputOperators">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Группа-1</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">По офферу
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6">
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path>
                                                                                        </svg>
                                                                                    </div><span class=" css-1okebmr-indicatorSeparator"></span>
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
                                                        <div class="col" id="blockInputOperators">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Группа-2</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">По часам
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6">
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path>
                                                                                        </svg>
                                                                                    </div><span class=" css-1okebmr-indicatorSeparator"></span>
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
                                                        <div class="col" id="blockInputOperators">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Группа-3</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">По оператору
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6">
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path>
                                                                                        </svg>
                                                                                    </div><span class=" css-1okebmr-indicatorSeparator"></span>
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
<div class="col" id="blockInputOperators">
<div class="jss8"><div class=" css-2b097c-container"><div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth"><label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Партнёры</label><div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl"><div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text"><div class="jss10"><div role="button" class="MuiChip-root jss11 MuiChip-outlined MuiChip-sizeSmall MuiChip-deletable" tabindex="-1"><span class="MuiChip-label MuiChip-labelSmall">Арбитраж</span><svg class="MuiSvgIcon-root MuiChip-deleteIcon MuiChip-deleteIconSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation"><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"></path></svg></div><div class="css-1tna5xz"><div class="" style="display: inline-block;"><input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div></div></div></div><div class=" css-1wy0on6"><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path></svg></div><span class=" css-1okebmr-indicatorSeparator"></span><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path></svg></div></div></div></div></div></div></div>
</div>
                                                    <div class="col" id="blockInputOperators">
                                                        <div class="jss8">
                                                            <div class=" css-2b097c-container">
                                                                <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                    <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Операторы</label>
                                                                    <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                        <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                            <div class="jss10">
                                                                                <div role="button" class="MuiChip-root jss11 MuiChip-outlined MuiChip-sizeSmall MuiChip-deletable" tabindex="-1"><span class="MuiChip-label MuiChip-labelSmall">МТС</span>
                                                                                    <svg class="MuiSvgIcon-root MuiChip-deleteIcon MuiChip-deleteIconSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                                                                                        <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"></path>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="css-1tna5xz">
                                                                                    <div class="" style="display: inline-block;">
                                                                                        <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=" css-1wy0on6">
                                                                                <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                    <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                        <path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path>
                                                                                    </svg>
                                                                                </div><span class=" css-1okebmr-indicatorSeparator"></span>
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
                                                    <div class="col" id="blockInputOffers">
                                                        <div class="jss8">
                                                            <div class=" css-2b097c-container">
                                                                <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                    <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Офферы</label>
                                                                    <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                        <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                            <div class="jss10">
                                                                                <div role="button" class="MuiChip-root jss11 MuiChip-outlined MuiChip-sizeSmall MuiChip-deletable" tabindex="-1"><span class="MuiChip-label MuiChip-labelSmall">Все</span>
                                                                                    <svg class="MuiSvgIcon-root MuiChip-deleteIcon MuiChip-deleteIconSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                                                                                        <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"></path>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="css-1tna5xz">
                                                                                    <div class="" style="display: inline-block;">
                                                                                        <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=" css-1wy0on6">
                                                                                <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                    <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                        <path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path>
                                                                                    </svg>
                                                                                </div><span class=" css-1okebmr-indicatorSeparator"></span>
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
													<div class="col" id="blockInputOperators">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Тип услуги</label>
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10">Все
                                                                                    <div class="css-1tna5xz">
                                                                                        <div class="" style="display: inline-block;">
                                                                                            <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" css-1wy0on6">
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                            <path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path>
                                                                                        </svg>
                                                                                    </div><span class=" css-1okebmr-indicatorSeparator"></span>
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
                                                        <div class="col" id="blockInputOffers">
                                                        <div class="jss8">
                                                            <div class=" css-2b097c-container">
                                                                <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                    <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Группы сервисов</label>
                                                                    <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                        <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                            <div class="jss10">
                                                                                <div role="button" class="MuiChip-root jss11 MuiChip-outlined MuiChip-sizeSmall MuiChip-deletable" tabindex="-1"><span class="MuiChip-label MuiChip-labelSmall">Все</span>
                                                                                    <svg class="MuiSvgIcon-root MuiChip-deleteIcon MuiChip-deleteIconSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                                                                                        <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"></path>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="css-1tna5xz">
                                                                                    <div class="" style="display: inline-block;">
                                                                                        <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=" css-1wy0on6">
                                                                                <div aria-hidden="true" class=" css-tlfecz-indicatorContainer">
                                                                                    <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                                        <path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path>
                                                                                    </svg>
                                                                                </div><span class=" css-1okebmr-indicatorSeparator"></span>
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
                                                    <div class="col" id="blockInputPresets">
                                                        <div class="jss8">
                                                            <div class="css-2b097c-container">
                                                                <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                    <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Настройки фильтров</label>
                                                                    <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">

                                                                        <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                            <div class="jss10">
                                                                                <div class=" css-1uccc91-singleValue">Пусто</div>
                                                                                <div class="css-1tna5xz">
                                                                                    <div class="" style="display: inline-block;">
                                                                                        <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 0; outline: 0px; padding: 0px; color: inherit;">
                                                                                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="btn-bg">
                                                                                    <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeSmall" tabindex="0" type="button" variant="contained" title="Удалить выбранный пресет"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation"><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"></path></svg></span><span class="MuiTouchRipple-root"></span></button>

                                                                                    <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeSmall" tabindex="0" type="button" variant="contained" title="Сохранить текущую конфигурацию фильтров"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation"><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z"></path></svg></span><span class="MuiTouchRipple-root"></span></button>
                                                                                    <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeSmall" tabindex="0" type="button" variant="contained" title="Сбросить текущую конфигурацию фильтров"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"></path></svg></span><span class="MuiTouchRipple-root"></span></button>
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
                                            <div class="tab-pane fade" id="custom-nav-start" role="tabpanel" aria-labelledby="custom-nav-start-tab">
                                              <div class="row">
          <div class="col-lg-2" id="blockInputOffers">
            <div class="jss8"><div class=" css-2b097c-container"><div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth"><label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Дата</label><div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl"><div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text"><div class="jss10"><span class="ss">29.12.1989 - 11.02.2020</span></div><div class=" css-1wy0on6"><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"></div></div></div>
          </div></div></div></div>
          </div>
            
          
              <div class="col-lg-4" id="blockInputPeriod">
            <div class="jss8">
              <div class=" css-2b097c-container">
                <div class="nowrap-custom">
              <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="">Период</label>
              <button class="icon-btn"><i class="date-icon icon-day"></i></button>
              <button class="icon-btn"><i class="date-icon icon-minus-day"></i></button>
              <button class="icon-btn"><i class="date-icon icon-2"></i></button>
              <button class="icon-btn"><i class="date-icon icon-7"></i></button>
              <!--<button class="icon-btn"><i class="date-icon icon-week"></i></button>-->
              <!--<button class="icon-btn"><i class="date-icon icon-minus-week"></i></button>-->
              <button class="icon-btn"><i class="date-icon icon-14"></i></button>
              <button class="icon-btn"><i class="date-icon icon-m"></i></button>
              <button class="icon-btn"><i class="date-icon icon-minus-m"></i></button>
              <button class="icon-btn"><i class="date-icon icon-30"></i></button>



            </div>
              </div>
              
            </div>
            
          </div>
          
          <div class="col-lg-6 col-md-12 row">
           <div class="col" id="blockInputOperators">
            <div class="jss8"><div class=" css-2b097c-container"><div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth"><label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Группа-1</label><div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl"><div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text"><div class="jss10">По офферу<div class="css-1tna5xz"><div class="" style="display: inline-block;"><input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div></div></div></div><div class=" css-1wy0on6"><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path></svg></div><span class=" css-1okebmr-indicatorSeparator"></span><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path></svg></div></div></div></div></div></div></div>
          </div>
            <div class="col" id="blockInputOperators">
            <div class="jss8"><div class=" css-2b097c-container"><div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth"><label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Группа-2</label><div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl"><div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text"><div class="jss10">По часам<div class="css-1tna5xz"><div class="" style="display: inline-block;"><input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div></div></div></div><div class=" css-1wy0on6"><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path></svg></div><span class=" css-1okebmr-indicatorSeparator"></span><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path></svg></div></div></div></div></div></div></div>
          </div>
            <div class="col" id="blockInputOperators">
            <div class="jss8"><div class=" css-2b097c-container"><div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth"><label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Группа-3</label><div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl"><div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text"><div class="jss10">По оператору<div class="css-1tna5xz"><div class="" style="display: inline-block;"><input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div></div></div></div><div class=" css-1wy0on6"><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path></svg></div><span class=" css-1okebmr-indicatorSeparator"></span><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path></svg></div></div></div></div></div></div></div>
          </div>
            
            
          </div>
         <div class="col" id="blockInputOperators">
            <div class="jss8"><div class=" css-2b097c-container"><div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth"><label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Партнёры</label><div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl"><div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text"><div class="jss10"><div role="button" class="MuiChip-root jss11 MuiChip-outlined MuiChip-sizeSmall MuiChip-deletable" tabindex="-1"><span class="MuiChip-label MuiChip-labelSmall">Арбитраж</span><svg class="MuiSvgIcon-root MuiChip-deleteIcon MuiChip-deleteIconSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation"><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"></path></svg></div><div class="css-1tna5xz"><div class="" style="display: inline-block;"><input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div></div></div></div><div class=" css-1wy0on6"><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path></svg></div><span class=" css-1okebmr-indicatorSeparator"></span><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path></svg></div></div></div></div></div></div></div>
          </div>
          <div class="col" id="blockInputOperators">
            <div class="jss8"><div class=" css-2b097c-container"><div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth"><label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Операторы</label><div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl"><div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text"><div class="jss10"><div role="button" class="MuiChip-root jss11 MuiChip-outlined MuiChip-sizeSmall MuiChip-deletable" tabindex="-1"><span class="MuiChip-label MuiChip-labelSmall">МТС</span><svg class="MuiSvgIcon-root MuiChip-deleteIcon MuiChip-deleteIconSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation"><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"></path></svg></div><div class="css-1tna5xz"><div class="" style="display: inline-block;"><input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div></div></div></div><div class=" css-1wy0on6"><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path></svg></div><span class=" css-1okebmr-indicatorSeparator"></span><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path></svg></div></div></div></div></div></div></div>
          </div>
          <div class="col" id="blockInputOffers">
            <div class="jss8"><div class=" css-2b097c-container"><div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth"><label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Офферы</label><div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl"><div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text"><div class="jss10"><div role="button" class="MuiChip-root jss11 MuiChip-outlined MuiChip-sizeSmall MuiChip-deletable" tabindex="-1"><span class="MuiChip-label MuiChip-labelSmall">Все</span><svg class="MuiSvgIcon-root MuiChip-deleteIcon MuiChip-deleteIconSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation"><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"></path></svg></div><div class="css-1tna5xz"><div class="" style="display: inline-block;"><input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div></div></div></div><div class=" css-1wy0on6"><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path></svg></div><span class=" css-1okebmr-indicatorSeparator"></span><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path></svg></div></div></div>
          </div></div></div></div>
          </div>         
          
          <div class="col" id="blockInputPresets">
            <div class="jss8"><div class=" css-2b097c-container"><div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth"><label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Искать</label><div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl"><div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text"><div class="jss10"><div class="css-1tna5xz"><div class="" style="display: inline-block;"><input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value=""  style="box-sizing: content-box;    background: 0px center;    border: 0px;    font-size: inherit;    opacity: 1;    outline: 0px;    padding: 0px;    color: inherit;    width: 100%;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div></div></div></div><div class=" css-1wy0on6"><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path></svg></div><span class=" css-1okebmr-indicatorSeparator"></span><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><i class="fa fa-search"></i></div></div></div>
          </div></div></div></div>


              </div></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="circle-btn-group">
                                            <button class="circle-btn" title="Сформировать отчет"><i class="ti ti-check"></i></button>
                                            <button class="circle-btn" title="Показать график"><i class="ti ti-stats-up stat-icon"></i></button>
                                            <button class="circle-btn" title="Очистить"><i class="ti ti-close"></i></button>
                                        </div>
                                    </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="row">

                            </div>
                            <div class="card-body">
                                

                                <div class="row" id="createPotok" style="display: none;">
                                    <div class="col-lg-12 col-sm-12 ramka">
                                        <hr>
                                        <button class="close" onclick="closePotok();"><i class="ti ti-close cursor"></i></button>
                                        <br>
                                        <br>
                                        <div class="b-group">
                                            <div class="col-sm-12 preferences">
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">Клики</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">ТБ</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">Переходы</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">Просмотры</label>
                                                </div>
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">Клики</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">Подписки</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">ИК</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">CVR</label>
                                                </div>
                                                <!------------->

                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">Ребиллы</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">Выкуп</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">Активные</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">Отписки</label>
                                                </div>
                                                <!------------->
                                                <!------------->

                                                <!------------->

                                                <div class="custom-mselect margin5">
                                                    <input type="checkbox" checked="checked" id="с1" class="ios" />
                                                    <label for="с1" class="name-check">Сумма, руб.</label>
                                                </div>
                                            </div>

                                        </div>

                                        <br>
                                        <button class="btn btn-outline-info" onclick="closePotok();">Сохранить</button>
                                    </div>

                                    <hr>

                                    <!--------------------------------------------->

                                </div>
                            </div>

                            <div class="row">
                                <hr>
                                <div class="col-12">
                                    <i class="fa fa-cog customize-table float-right" style="font-size: 24px; margin-bottom: 5px;" onclick="test();"></i>
                                    <i class="ti ti-import float-right" style="font-size: 24px; margin-bottom: 5px; margin: 0 10px 5px"></i>
                                    <!--<i class="ti ti-settings customize-table float-right" style="font-size: 24px; margin-bottom: 5px;" onclick="test();"></i>-->
                                    <br>
                                    <div class="responsive-block" id="fullWidth">
                                        <table id="example" class="table  table-bordered nowrap" style="width:100%;">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Дата</th>
                                                    <th>Клики</th>
                                                    <th>ТБ</th>
                                                    <th>Подписки</th>
                                                    <th>CVR %</th>
                                                    <th>ИК</th>
                                                    <th>Выкупы</th>
                                                    <th>Ребиллы</th>
                                                    <th>Активные</th>
                                                    <th>Отписки</th>
                                                    <th>Сумма, руб</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-down"></i>01.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="drop">
                                                    <td><i class="ti ti-angle-right"></i>02 Oct 00:00</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="drop">
                                                    <td><i class="ti ti-angle-right"></i>02 Oct 01:00</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="drop">
                                                    <td><i class="ti ti-angle-down"></i>02 Oct 02:00</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="doubledrop">
                                                    <td>02 Oct 02:00 1</td>
                                                    <td>1 055</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="doubledrop">
                                                    <td>02 Oct 02:00 2</td>
                                                    <td>1 055</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="doubledrop">
                                                    <td>02 Oct 02:00 3</td>
                                                    <td>1 055</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="doubledrop">
                                                    <td>02 Oct 02:00 4</td>
                                                    <td>1 055</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="doubledrop">
                                                    <td>02 Oct 02:00 5</td>
                                                    <td>1 055</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="doubledrop">
                                                    <td>02 Oct 02:00 6</td>
                                                    <td>1 055</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="drop">
                                                    <td><i class="ti ti-angle-right"></i>02 Oct 03:00</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="drop">
                                                    <td><i class="ti ti-angle-right"></i>02 Oct 04:00</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>02.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>03.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>04.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>05.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>06.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>07.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>08.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td>1 366</td>
                                                    <td>122</td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>

                                            </tbody>
                                            <tfoot class="thead-dark">
                                                <tr>
                                                    <th>Дата</th>
                                                    <th>Клики</th>
                                                    <th>ТБ</th>
                                                    <th>Подписки</th>
                                                    <th>CVR %</th>
                                                    <th>ИК</th>
                                                    <th>Выкупы</th>
                                                    <th>Ребиллы</th>
                                                    <th>Активные</th>
                                                    <th>Отписки</th>
                                                    <th>Сумма, руб</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!--------------------------end col-12-------------------------->

                    </div>

            </div>
            </div>
            </div>
            </div>

            </div>
            </div>
            <!--end right-panel-->
            <div id="footer-right-panel" class="right-panel">
                <footer class="footer footer-relative">
                    <div class="footer-inner bg-offer">
                        <div class="row" style="display: none;">
                            <div class="line1">
                                <div class="input-group d-flex justify-content-end search-line">
                                    <input class="form-control py-2 border-right-0 border col-lg-12" type="search" value="" placeholder="Поиск по названию" id="offer-search">
                                    <span class="input-group-append">
                        <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
                        </span>

                                </div>

                            </div>

                            <div class="line2">
                                <div class="d-flex flex-row pick-offers">Выделено офферов <span>12</span></div>
                                <button type="button" class="btn btn-warning create-links">Создать ссылки</button>
                            </div>
                        </div>
                </footer>
                </div>
                <?php include 'popup.php';?>

                <!-- Right Panel -->

                <!-- Scripts -->
                <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
                <script src="assets/js/bootstrap.min.js"></script>
                <script src="assets/js/jquery.matchHeight.min.js"></script>
                <script src="assets/js/main.js"></script>
                <script src="assets/js/scroll/perfect-scrollbar.jquery.min.js"></script>
                <script src="assets/js/jquery.touchSwipe.js"></script>
                <script src="assets/js/swipe.js"></script>

                <script>
                    jQuery(document).ready(function() {
                        jQuery(".standardSelect").chosen({

                            disable_search_threshold: 10,
                            no_results_text: "Oops, nothing found!",
                            width: "100%"
                        });
                    });
                </script>
                <script>
                    $('.copyClick').focus(function() {
                        $(this).select();
                        $(this).siblings('input.linkToCopy').select();
                        document.execCommand("copy");
                        $('#alertCopy').show('fast');
                        setTimeout(function() {
                            $("#alertCopy").hide('slow');
                        }, 4000);
                    });
                </script>

                <div class="alert-copy" style="display: none;" id="alertCopy"><i class="fa fa-code"></i><span>Текст скопирован</span></div>
                <script>
                    function link2() {
                        location.href = "http://lpt.playmobile.ru/offers/skrom/affimob-redis/pk2/offers.html"
                    }

                    function auto_grow(element) {
                        element.style.height = "5px";
                        element.style.height = (element.scrollHeight) + "px";
                    }
                </script>
                <script>
                    function test() {
                        $('#createPotok').show('fast');
                        $('#link1').css("filter", "blur(3px)");
                        $('#link2').css("filter", "blur(3px)");
                        $('#link1').attr("disabled", true);
                        $('#link2').attr("disabled", true);
                    };

                    function closePotok() {
                        $('#createPotok').hide('fast');
                        $('#link1').css("filter", "blur(0px)");
                        $('#link2').css("filter", "blur(0px)");
                        $('#link1').attr("disabled", false);
                        $('#link2').attr("disabled", false);
                    };
                </script>
                <script>
                    function clickMe() {
                        $(".linkToCopy").val("http://s2s.affimob.com/click?key=eromix&offer_id=11694&tmpl=eromix274&partner_id=125198&source_id=0&pt_id=%7BPK%7D");

                    }
                </script>
                <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

                <script>
                    jQuery(document).ready(function() {
                        jQuery(".standardSelect").chosen({
                            disable_search_threshold: 10,
                            no_results_text: "Oops, nothing found!",
                            width: "100%"
                        });
                    });
                </script>
                <script>
                    $(".ios").iosCheckbox();
                </script>
                <script>
                    $(document).ready(function() {
                        $('#example').DataTable({
                            scrollY: '70vh',
                            scrollX: '80vw',
                            scrollCollapse: true,
                            paging: false,
                            searching: false,
                            responsive: true,
                        });
                    });
                </script>
                <script>
                    mobiscroll.settings = {
                        lang: 'ru', // Specify language like: lang: 'pl' or omit setting to use default
                        theme: 'ios' // Specify theme like: theme: 'ios' or omit setting to use default
                    };

                    $(function() {

                        // Mobiscroll Date & Time initialization
                        $('#demo-mobile').mobiscroll().date({
                            display: 'bubble' // Specify display mode like: display: 'bottom' or omit setting to use default
                        });

                        // Mobiscroll Date & Time initialization
                        $('#demo-desktop').mobiscroll().date({
                            display: 'bubble', // Specify display mode like: display: 'bottom' or omit setting to use default
                            touchUi: false // More info about touchUi: https://docs.mobiscroll.com/4-8-3/datetime#opt-touchUi
                        });

                    });
                </script>
                <script>
                    var MyWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
                    var BrowsWidth = document.documentElement.clientWidth;
                    if ($(window).width() < 1024) {
                        //document.getElementById('fullWidth').style.width = MyWidth + "px";
                        document.getElementById('fullWidth').style.width = BrowsWidth + "px";
                        document.getElementById('fullWidth').style.maxWidth = "100%";
                        document.getElementById('fullWidth').style.minWidth = "100%";

                    };


                </script>
                <script>
                    $(window).on("load resize", function(event) {
                        var windowWidthS = $(window).width();
                        if (windowWidthS < 1381) {
                            $('#blockInputOperators').addClass('col-lg-4');
                            $('#blockInputOffers').addClass('col-lg-4');
                            $('#blockInputSpace').css("display", "none");
                            $('#blockInputPresets').addClass('col-lg-4');
                            $('body').addClass('open');
                            $('#blockInputDatapicker').addClass('col-lg-3');
                            $('#blockInputPeriod').removeClass('col-lg-4');
                            $('#blockInputPeriod').addClass('col-lg-3');

                        } else {
                            $('#blockInputOperators').removeClass('col-lg-4');
                            $('#blockInputOffers').removeClass('col-lg-4');
                            $('#blockInputSpace').css("display", "block");
                            $('#blockInputPresets').removeClass('col-lg-4');
                            $('body').removeClass('open');

                        }

                    });

                </script>
    </body>

</html>