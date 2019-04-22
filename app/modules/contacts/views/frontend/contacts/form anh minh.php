<link rel="stylesheet" href="templates/backend/plugins/select2/select2.min.css" />

<div class="container">
    <div class="main-ctn" data-v-186ce6e7="">
        <form class="el-form" id="sform" method="post" action="mailsubricre.html">
            <div class="error uk-alert" style="display: none;"></div>
            <div class="divider" data-v-186ce6e7="">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">您的用戶基本資料</font>
                </font>
            </div>
            <div class="row" style="margin-left:-25px;margin-right:-25px;" data-v-186ce6e7="">
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:25px;padding-right:25px;"
                    data-v-186ce6e7="">
                    <div class="el-form-item is-required" data-v-186ce6e7=""><label for="company"
                            class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">公司名</font>
                            </font>
                        </label>
                        <div class="el-form-item__content">
                            <div class="el-input" data-v-186ce6e7="">
                                <!----><input type="text" name="fullname" autocomplete="off" value="" class="el-input__inner">

                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:25px;padding-right:25px;"
                    data-v-186ce6e7="">
                    <div class="el-form-item is-required" data-v-186ce6e7=""><label for="username"
                            class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">用戶名</font>
                            </font>
                        </label>
                        <div class="el-form-item__content">
                            <div class="el-input" data-v-186ce6e7="">
                                <!----><input type="text" autocomplete="off" value="" class="el-input__inner">
                                
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:25px;padding-right:25px;"
                    data-v-186ce6e7="">
                    <div class="el-form-item is-required" data-v-186ce6e7=""><label for="email"
                            class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">信箱</font>
                            </font>
                        </label>
                        <div class="el-form-item__content">
                            <div class="el-input" data-v-186ce6e7="">
                                <!----><input type="text" autocomplete="off" name="email" value="" class="el-input__inner email">
                                <!---->
                                <!---->
                                <!---->
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:25px;padding-right:25px;"
                    data-v-186ce6e7="">
                    <div class="el-form-item is-required" data-v-186ce6e7=""><label for="phone"
                            class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">電話</font>
                            </font>
                        </label>
                        <div class="el-form-item__content">
                            <div class="el-input" data-v-186ce6e7="">
                                <!----><input type="text" autocomplete="off" value="" class="el-input__inner">
                                <!---->
                                <!---->
                                <!---->
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider" data-v-186ce6e7="">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">行銷活動網紅媒合需求</font>
                </font>
            </div>
            <div class="row" style="margin-left:-25px;margin-right:-25px;" data-v-186ce6e7="">
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:25px;padding-right:25px;"
                    data-v-186ce6e7="">
                    <div class="el-form-item is-required" data-v-186ce6e7=""><label for="kolType"
                            class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">網紅類型</font>
                            </font>
                        </label>
                        <?php echo form_dropdown('address', $this->BackendTags_Model->Dropdown(), (isset($tagsid)?$tagsid:NULL), 'class="form-control select2" multiple="multiple" style="width: 100%;" id="tagsid"');?>
                        
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:25px;padding-right:25px;"
                    data-v-186ce6e7="">
                    <div class="el-form-item is-required" data-v-186ce6e7=""><label for="kolLevel"
                            class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">平台粉絲數</font>
                            </font>
                        </label>
                        <div class="el-form-item__content">
                            <select type="text" readonly="readonly" autocomplete="off" placeholder="平台粉絲數" value=""
                                class="el-input__inner">
                                <span class="el-input__suffix"><span class="el-input__suffix-inner"><i
                                            class="fa fa-icon-arrow-up"></i>
                                        <option class="el-select-dropdown__item" value="超過 2,500人"><span>超過
                                                2,500人</span></option>
                                        <option class="el-select-dropdown__item" value="超過 1萬人"><span>超過 1萬人</span>
                                        </option>
                                        <option class="el-select-dropdown__item" value="超過 5萬人"><span>超過 5萬人</span>
                                        </option>
                                        <option class="el-select-dropdown__item" value="超過 10萬人"><span>超過 10萬人</span>
                                        </option>
                                        <option class="el-select-dropdown__item" value="超過 30萬人"><span>超過 30萬人</span>
                                        </option>
                                        <option class="el-select-dropdown__item" value="超過 60萬人"><span>超過 60萬人</span>
                                        </option>
                                        <option class="el-select-dropdown__item" value="超過 100萬人"><span>超過 100萬人</span>
                                        </option>
                                    </span>
                                </span>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:25px;padding-right:25px;"
                    data-v-186ce6e7="">
                    <div class="el-form-item is-required" data-v-186ce6e7=""><label for="serviceType"
                            class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">服務內容</font>
                            </font>
                        </label>
                        <div class="el-form-item__content">
                            <div class="el-select" data-v-186ce6e7="">
                                <!---->
                                <div class="el-input el-input--suffix">
                                    <select type="text" readonly="readonly" autocomplete="off" placeholder="服務內容"
                                        value="" class="el-input__inner">
                                        <option class="el-select-dropdown__item" value="圖文"><span>圖文</span></option>
                                        <option class="el-select-dropdown__item" value="短影音"><span>短影音</span></option>
                                        <option class="el-select-dropdown__item" value="直播"><span>直播</span></option>
                                    </select>
                                </div>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:25px;padding-right:25px;"
                    data-v-186ce6e7="">
                    <div class="el-form-item is-required" data-v-186ce6e7=""><label for="platform"
                            class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">宣傳平台</font>
                            </font>
                        </label>
                        <div class="el-form-item__content">
                            <div role="group" aria-label="checkbox-group" class="el-checkbox-group platform-group"
                                data-v-186ce6e7="">
                                <label class="el-checkbox-button facebook_1">
                                    <input type="checkbox" value="Facebook" class="el-checkbox-button__original"
                                        style="display: none">
                                    <span class="el-checkbox-button__inner facebook">Facebook</span>
                                </label>
                                <label class="el-checkbox-button youTube_1">
                                    <input type="checkbox" value="YouTube" class="el-checkbox-button__original"
                                        style="display: none">
                                    <span class="el-checkbox-button__inner youTube">YouTube</span>
                                </label>
                                <label class="el-checkbox-button instagram_1">
                                    <input type="checkbox" value="instagram" class="el-checkbox-button__original"
                                        style="display: none">
                                    <span class="el-checkbox-button__inner instagram">instagram</span>
                                </label>
                                <label class="el-checkbox-button twitch_1">
                                    <input type="checkbox" value="twitch" class="el-checkbox-button__original"
                                        style="display: none">
                                    <span class="el-checkbox-button__inner twitch">twitch</span>
                                </label>
                            </div>
                            <script>
                                $('.facebook').click(function () {
                                    $('.facebook_1').toggleClass('is-checked');
                                })
                                $('.youTube').click(function () {
                                    $('.youTube_1').toggleClass('is-checked');
                                })
                                $('.instagram').click(function () {
                                    $('.instagram_1').toggleClass('is-checked');
                                })
                                $('.twitch').click(function () {
                                    $('.twitch_1').toggleClass('is-checked');
                                })
                            </script>
                            <style>
                                .el-checkbox-button.is-checked .el-checkbox-button__inner {
                                    color: #FFF;
                                    background-color: #409EFF;
                                    border-color: #409EFF;
                                    -webkit-box-shadow: -1px 0 0 0 #8cc5ff;
                                    box-shadow: -1px 0 0 0 #8cc5ff;
                                }

                                .el-checkbox-button__inner {
                                    border-left: 1px solid #DCDFE6;
                                    border-radius: 4px 0 0 4px;
                                    -webkit-box-shadow: none !important;
                                    box-shadow: none !important;
                                }

                                .el-checkbox-button__inner {
                                    line-height: 1;
                                    font-weight: 500;
                                    white-space: nowrap;
                                    vertical-align: middle;
                                    cursor: pointer;
                                    background: #FFF;
                                    border: 1px solid #DCDFE6;
                                    border-left: 0;
                                    color: #606266;
                                    -webkit-appearance: none;
                                    text-align: center;
                                    -webkit-box-sizing: border-box;
                                    box-sizing: border-box;
                                    outline: 0;
                                    margin: 0;
                                    -webkit-transition: all .3s cubic-bezier(.645, .045, .355, 1);
                                    transition: all .3s cubic-bezier(.645, .045, .355, 1);
                                    -moz-user-select: none;
                                    -webkit-user-select: none;
                                    -ms-user-select: none;
                                    padding: 12px 20px;
                                    font-size: 14px;
                                    border-radius: 0;
                                }
                            </style>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:25px;padding-right:25px;"
                    data-v-186ce6e7="">
                    <div class="el-form-item age-select" data-v-186ce6e7=""><label for="age"
                            class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">受眾年齡區間</font>
                            </font>
                        </label>
                        <div class="el-form-item__content">
                            <div type="number" class="el-select" data-v-186ce6e7="">
                                <!---->
                                <div class="el-input el-input--suffix">
                                    <select type="text" readonly="readonly" autocomplete="off" placeholder="開始年齡"
                                        value="" class="el-input__inner">
                                        <option class="el-select-dropdown__item" data-v-186ce6e7="15"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">15</font>
                                                </font>
                                            </span></option>
                                        <option class="el-select-dropdown__item" data-v-186ce6e7="20"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">20</font>
                                                </font>
                                            </span></option>
                                        <option class="el-select-dropdown__item selected" data-v-186ce6e7="25"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">25</font>
                                                </font>
                                            </span></option>
                                        <option class="el-select-dropdown__item" data-v-186ce6e7="30"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">30</font>
                                                </font>
                                            </span></option>
                                        <option class="el-select-dropdown__item" data-v-186ce6e7="35"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">35</font>
                                                </font>
                                            </span></option>
                                    </select>
                                </div>

                            </div><span class="between" data-v-186ce6e7="">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">至</font>
                                </font>
                            </span>
                            <div type="number" class="el-select" data-v-186ce6e7="">
                                <!---->
                                <div class="el-input el-input--suffix">
                                    <select type="text" readonly="readonly" autocomplete="off" placeholder="結束年齡"
                                        value="" class="el-input__inner">
                                        <option class="el-select-dropdown__item" data-v-186ce6e7="25"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">25</font>
                                                </font>
                                            </span></option>
                                        <option class="el-select-dropdown__item" data-v-186ce6e7="30"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">30</font>
                                                </font>
                                            </span></option>
                                        <option class="el-select-dropdown__item selected" data-v-186ce6e7="35"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">35</font>
                                                </font>
                                            </span></option>
                                        <option class="el-select-dropdown__item" data-v-186ce6e7="40"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">40</font>
                                                </font>
                                            </span></option>
                                        <option class="el-select-dropdown__item" data-v-186ce6e7="45"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">45</font>
                                                </font>
                                            </span></option>
                                        <option class="el-select-dropdown__item" data-v-186ce6e7="50"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">50</font>
                                                </font>
                                            </span></option>
                                        <option class="el-select-dropdown__item" data-v-186ce6e7="55"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">55</font>
                                                </font>
                                            </span></option>
                                        <option class="el-select-dropdown__item" data-v-186ce6e7="60"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">60</font>
                                                </font>
                                            </span></option>
                                        <option class="el-select-dropdown__item" data-v-186ce6e7="65"><span>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">65</font>
                                                </font>
                                            </span></option>
                                    </select>

                                </div>

                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:25px;padding-right:25px;"
                    data-v-186ce6e7="">
                    <div class="el-form-item is-required" data-v-186ce6e7=""><label for="kolBudget"
                            class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">單一網紅服務預算</font>
                            </font>
                        </label>
                        <div class="el-form-item__content">
                            <div class="el-input" data-v-186ce6e7="">
                                <!----><input type="number" autocomplete="off" value="10000" class="el-input__inner">
                                <!---->
                                <!---->
                                <!---->
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:25px;padding-right:25px;"
                    data-v-186ce6e7="">
                    <div class="el-form-item is-required" data-v-186ce6e7=""><label for="kolNumber"
                            class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">網紅需求人數</font>
                            </font>
                        </label>
                        <div class="el-form-item__content">
                            <div class="el-input" data-v-186ce6e7="">
                                <!----><input type="number" autocomplete="off" value="1" class="el-input__inner">
                                <!---->
                                <!---->
                                <!---->
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:25px;padding-right:25px;"
                    data-v-186ce6e7="">
                    <div class="el-form-item is-required" data-v-186ce6e7=""><label for="dateRange"
                            class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">預計上線時間</font>
                            </font>
                        </label>
                        <div class="el-form-item__content">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--daterange"
                                data-v-186ce6e7=""><i class="fa fa-calendar"></i><input autocomplete="off"
                                    placeholder="開始時間" name="" value="2019-05-04" class="el-range-input"><span
                                    class="el-range-separator">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">至</font>
                                    </font>
                                </span><input autocomplete="off" placeholder="結束時間" name="" value="2019-06-04"
                                    class="el-range-input"><i class="el-input__icon el-range__close-icon"></i></div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="padding-left:25px;padding-right:25px;" data-v-186ce6e7="">
                    <div class="el-form-item" data-v-186ce6e7=""><label for="description" class="el-form-item__label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">特別需求及注意事項</font>
                            </font>
                        </label>
                        <div class="el-form-item__content">
                            <div class="el-textarea" data-v-186ce6e7=""><textarea autocomplete="off" rows="5"
                                    class="el-textarea__inner" style="min-height: 33px;"></textarea></div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="padding-left:25px;padding-right:25px;" data-v-186ce6e7="">
                    <hr data-v-186ce6e7="">
                    <div class="el-form-item ctn-center" data-v-186ce6e7="">
                        <!---->
                        <div class="el-form-item__content"><button type="submit" class="el-button el-button--primary"
                                data-v-186ce6e7="">
                                <!---->
                                <!----><span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Make sure to send</font>
                                    </font>
                                </span></button><button type="reset" class="el-button el-button--default"
                                data-v-186ce6e7="">
                                <!---->
                                <!----><span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">fill in again</font>
                                    </font>
                                </span></button>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!---->
    </div>
</div>
<style type="text/css">
    .main-ctn {
        -webkit-box-shadow: 0 0 25px rgba(0, 0, 0, .2);
        box-shadow: 0 0 25px rgba(0, 0, 0, .2);
        background: #fff;
        margin-top: 0;
        padding: 50px;
        z-index: 10;
        color: #3e3d3d;
        min-height: 580px;
        text-align: left;
    }

    .divider {
        font-size: 20px;
        font-weight: 700;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        word-break: keep-all;
        margin-top: 40px;
        margin-bottom: 20px;
    }

    .divider:after,
    .divider:before {
        content: "";
        border-top: 1px solid #dcdfe6;
        width: 50%;
        margin-top: 12px;
        margin-right: 20px;
    }

    .main-ctn .el-form-item {
        margin-bottom: 10px;
    }

    .el-form-item__label {
        text-align: right;
        float: left;
        font-size: 14px;
        color: #606266;
        line-height: 40px;
        padding: 0 12px 0 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .el-form-item__content {
        line-height: 40px;
        position: relative;
        font-size: 14px;
    }

    .el-input {
        position: relative;
        font-size: 14px;
        display: inline-block;
        width: 100%;
    }

    .el-input__inner {
        -webkit-appearance: none;
        background-color: #FFF;
        background-image: none;
        border-radius: 4px;
        border: 1px solid #DCDFE6;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #606266;
        display: inline-block;
        font-size: inherit;
        height: 40px;
        line-height: 40px;
        outline: 0;
        padding: 0 15px;
        -webkit-transition: border-color .2s cubic-bezier(.645, .045, .355, 1);
        transition: border-color .2s cubic-bezier(.645, .045, .355, 1);
        width: 100%;
    }

    .el-form-item.is-required:not(.is-no-asterisk)>.el-form-item__label:before {
        content: '*';
        color: #F56C6C;
        margin-right: 4px;
    }

    .main-ctn .el-select {
        width: 100%;
    }

    .el-select {
        display: inline-block;
        position: relative;
    }

    .el-select__tags {
        position: absolute;
        line-height: normal;
        white-space: normal;
        z-index: 1;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .el-tag--small {
        height: 24px;
        padding: 0 8px;
        line-height: 22px;
    }

    .platform-group {
        width: 100%;
        clear: both;
        text-align: left;
    }

    .el-checkbox-group {
        font-size: 0;
    }

    .el-select .el-tag {
        box-sizing: border-box;
        border-color: transparent;
        margin: 2px 0 2px 6px;
        background-color: #f0f2f5;
    }

    .el-select .el-tag__close.el-icon-close {
        background-color: #C0C4CC;
        right: -7px;
        top: 0;
        color: #FFF;
    }

    .el-tag--small .el-icon-close {
        -webkit-transform: scale(.8);
        transform: scale(.8);
    }

    .el-tag--info,
    .el-tag--info .el-tag__close {
        color: #909399;
    }

    .el-tag .el-icon-close {
        border-radius: 50%;
        text-align: center;
        position: relative;
        cursor: pointer;
        font-size: 12px;
        height: 16px;
        width: 16px;
        line-height: 16px;
        top: -1px;
        right: -5px;
        color: #409EFF;
    }

    .el-checkbox-button,
    .el-checkbox-button__inner {
        position: relative;
        display: inline-block;
    }

    .el-checkbox-button:first-child .el-checkbox-button__inner {
        border-left: 1px solid #DCDFE6;
        border-radius: 4px 0 0 4px;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    .el-checkbox-button__inner {
        line-height: 1;
        font-weight: 500;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        background: #FFF;
        border: 1px solid #DCDFE6;
        border-left: 0;
        color: #606266;
        -webkit-appearance: none;
        text-align: center;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        outline: 0;
        margin: 0;
        -webkit-transition: all .3s cubic-bezier(.645, .045, .355, 1);
        transition: all .3s cubic-bezier(.645, .045, .355, 1);
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        padding: 12px 20px;
        font-size: 14px;
        border-radius: 0;
    }

    [type=checkbox],
    [type=radio] {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0;
    }

    .el-checkbox-button__original {
        opacity: 0;
        outline: 0;
        position: absolute;
        margin: 0;
        z-index: -1;
    }

    .age-select,
    .age-select .el-form-item__label {
        text-align: left;
    }

    .age-select {
        color: #3e3d3d;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .el-form-item__label {
        text-align: right;
        float: left;
        font-size: 14px;
        color: #606266;
        line-height: 40px;
        padding: 0 12px 0 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .age-select .el-form-item__content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .main-template .main-ctn .el-select {
        width: 100%;
    }

    .el-select>.el-input {
        display: block;
    }

    .el-input--suffix .el-input__inner {
        padding-right: 30px;
    }

    .el-input__suffix {
        right: 5px;
        transition: all .3s;
    }

    .el-input__prefix,
    .el-input__suffix {
        position: absolute;
        top: 0;
        -webkit-transition: all .3s;
        height: 100%;
        color: #C0C4CC;
        text-align: center;
    }

    .el-textarea {
        display: inline-block;
        width: 100%;
        vertical-align: bottom;
        font-size: 14px;
    }

    .el-textarea__inner {
        display: block;
        resize: vertical;
        padding: 5px 15px;
        line-height: 1.5;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        width: 100%;
        font-size: inherit;
        color: #606266;
        background-color: #FFF;
        background-image: none;
        border: 1px solid #DCDFE6;
        border-radius: 4px;
        -webkit-transition: border-color .2s cubic-bezier(.645, .045, .355, 1);
        transition: border-color .2s cubic-bezier(.645, .045, .355, 1);
    }

    .el-select-dropdown {
        position: absolute;
        z-index: 1001;
        border: 1px solid #E4E7ED;
        border-radius: 4px;
        background-color: #FFF;
        -webkit-box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        margin: 5px 0;
    }

    .el-scrollbar {
        overflow: hidden;
        position: relative;
    }

    .el-scrollbar__wrap {
        overflow: scroll;
        height: 100%;
    }

    .el-select-dropdown__wrap {
        max-height: 274px;
    }

    .el-select-dropdown__list {
        list-style: none;
        padding: 6px 0;
        margin: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .age-select .between {
        margin: 0 10px;
    }

    .el-select-dropdown__item.hover,
    .el-select-dropdown__item:hover {
        background-color: #f5f7fa;
    }

    .el-select-dropdown__item {
        font-size: 14px;
        padding: 0 20px;
        position: relative;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: #606266;
        height: 34px;
        line-height: 34px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        cursor: pointer;
    }

    .el-scrollbar__bar.is-vertical>div {
        width: 100%;
    }

    .el-scrollbar__thumb {
        position: relative;
        display: block;
        width: 0;
        height: 0;
        cursor: pointer;
        border-radius: inherit;
        background-color: rgba(144, 147, 153, .3);
        -webkit-transition: .3s background-color;
        transition: .3s background-color;
    }

    .el-scrollbar__bar.is-vertical>div {
        width: 100%;
    }

    .el-scrollbar__thumb:hover {
        background-color: rgba(144, 147, 153, .5);
    }

    .el-scrollbar__bar.is-vertical {
        width: 6px;
        top: 2px;
    }

    .el-scrollbar__bar {
        position: absolute;
        right: 2px;
        bottom: 2px;
        z-index: 1;
        border-radius: 4px;
        opacity: 0;
        -webkit-transition: opacity 120ms ease-out;
        transition: opacity 120ms ease-out;
    }

    .el-scrollbar:active>.el-scrollbar__bar,
    .el-scrollbar:focus>.el-scrollbar__bar,
    .el-scrollbar:hover>.el-scrollbar__bar {
        opacity: 1;
        -webkit-transition: opacity 340ms ease-out;
        transition: opacity 340ms ease-out;
    }

    .el-scrollbar__bar.is-horizontal {
        height: 6px;
        left: 2px;
    }

    textarea {
        overflow: auto;
    }

    .el-form-item__content::after {
        clear: both;
    }

    .platform-group {
        width: 100%;
        clear: both;
        text-align: left;
    }

    .el-range-editor.el-input__inner {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 3px 10px;
    }

    .el-date-editor {
        width: 100% !important;
    }

    .el-date-editor .el-range__icon {
        font-size: 14px;
        margin-left: -5px;
        color: #C0C4CC;
        float: left;
        line-height: 32px;
    }

    .el-range-editor .el-range-input {
        line-height: 1;
    }

    .el-date-editor .el-range-input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: none;
        outline: 0;
        padding: 0;
        width: 39%;
        color: #606266;
    }

    .el-date-editor .el-range-input,
    .el-date-editor .el-range-separator {
        height: 100%;
        margin: 0;
        text-align: center;
        display: inline-block;
        font-size: 14px;
    }

    .el-date-editor .el-range-separator {
        padding: 0 5px;
        line-height: 32px;
        width: 5%;
        color: #303133;
    }

    .col-md-6.col-sm-6.col-xs-12 {
        height: 100px;
    }
</style>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('#sform .error').hide();
        var uri = $('#sform').attr('action');
        $('#sform').on('submit',function(){
            var postData = $(this).serializeArray();
            $.post(uri, {post: postData,
                email: $('#sform .email').val(),
                },
                function(data){
                    var json = JSON.parse(data);
                    $('#sform .error').show();
                    if(json .error.length){
                        $('#sform .error').removeClass('alert alert-success').addClass('alert alert-danger');
                        $('#sform .error').html('').html(json.error);
                    }else{
                        $('#sform .error').removeClass('alert alert-danger').addClass('alert alert-success');
                        $('#sform .error').html('').html('Gửi yêu cầu đăng ký nhận bản tin thành công!.');
                        $('#sform').trigger("reset");
                        setTimeout(function(){ location.reload(); }, 5000);
                    }
                });
            return false;
        });
    });
</script>
<script src="templates/backend/plugins/select2/select2.full.min.js"></script>
<script type="text/javascript">
    $('.select2').select2();
</script>