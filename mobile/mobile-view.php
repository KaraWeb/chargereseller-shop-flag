<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo $config['description']; ?>"/>
	<meta name="keywords" content="<?php echo $config['keywords']; ?>"/>
	<link type="image/x-icon" rel="icon" href="mobile/css/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="mobile/css/jquery.qtip.css"/>
	<link rel="stylesheet" type="text/css" href="mobile/css/style.css"/>
	<title><?php echo $config['title']; ?></title>
</head>
<body>	
	<div class="bgs">
		<div class="product-menu">
			<ul>	
				<li class="nav services TopUp" alt="nav1" data-type="TopUp"><span>شارژ مستقیم</span></li>
				<li class="nav services PIN" alt="nav2" data-type="PIN"><span>کارت شارژ</span></li>
				<li class="nav services WiMax" alt="nav3" data-type="WiMax"><span>وایمکس ایرانسل</span></li>
				<li class="nav services Bill" alt="nav4" data-type="Bill"><span>پرداخت قبض</span></li>
				<li class="nav services GiftCard" alt="nav5" data-type="GiftCard" ><span>گیفت کارت</span></li>
				<li class="nav services Antivirus" alt="nav6" data-type="Antivirus"><span>آنتی ویروس</span></li>
                <li class="nav services Application" alt="nav7" data-type="Application"><span>اپلیکیشن</span></li>
                <li class="nav services Support" alt="nav8" data-type="Support"><span>پشتیبانی</span></li>
			</ul>
		</div>
        <ul class="first">
            <li class="nav TopUp" alt="nav1" data-type="TopUp">شارژ مستقیم</li>
            <li class="nav PIN" alt="nav2" data-type="PIN">کارت شارژ</li>
            <li class="nav WiMax" alt="nav3" data-type="WiMax">وایمکس ایرانسل</li>
            <li class="nav Bill" alt="nav4" data-type="Bill">پرداخت قبض</li>
            <li class="nav GiftCard" alt="nav5" data-type="GiftCard">گیفت کارت</li>
            <li class="nav Antivirus" alt="nav6" data-type="Antivirus">آنتی ویروس</li>
            <li class="nav Application" alt="nav7" data-type="Application">دانلود اپلیکیشن</li>
            <li class="nav Support" alt="nav8" data-type="Support">پشتیبانی</li>
        </ul>
        <div class="second">
            <div class="container">
                <div class="operators">
                    <div data-type="MTN" class="operator MTN"><i></i></div>
                    <div data-type="MCI" class="operator MCI"><i></i></div>
                    <div data-type="RTL" class="operator RTL"><i></i></div>
                    <div data-type="TAL" class="operator TAL"><i></i></div>
                </div>
                <div class="clear"></div>
                <div id="content">
                    <form accept-charset="utf-8" method="post" id="chargeform" action="http://www.chr724.ir/services/EasyCharge/">
                        <fieldset>
                            <div class="charge">
                                <div class="wimax-picture"></div>
                                <div class="input text required account">
                                    <input id="dataAccountTemp" class="input-large cellphone" type="text" value="" maxlength="11" name="data[AccountTemp]">
                                </div>
                                <div id="AmountTemp" class="input text required amount">
                                    <select id="dataAmountTemp" name="data[AmountTemp]">
                                        <option value="1000">1000 تومان</option>
                                        <option value="2000">2000 تومان</option>
                                        <option value="5000">5000 تومان</option>
                                        <option value="10000">10000 تومان</option>
                                        <option value="20000">20000 تومان</option>
                                    </select>
                                </div>
                                <div class="input text counter charge-amount">
                                    <div class="input text counter count">
                                        <span>تعداد</span>
                                        <select id="count" class="charge-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <span>عدد</span>
                                    </div>
                                    <div class="amount-container">
                                        <span class="amount-title">مبلغ</span>
                                        <span class="amount-value"></span>
                                        <span class="amount-unit">تومان</span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="input text email">
                                    <input id="EmailInput" type="email" maxlength="50" value="" title="آدرس ایمیل را به شکل صحیح بنویسید!" rel="tooltip" placeholder="you@domain.com">
                                </div>
                                <div class="Magiccharge">
                                    <input type="checkbox" value="1" id="magiccharge" name="data[Magic]">
                                    <label for="magiccharge">شارژ شگفت انگیز </label> 
                                </div>
                                <div class="NonCreditMTN">
                                    <input type="checkbox" value="1" id="NonCreditMTN" name="data[NonCreditMTN]">
                                    <label for="NonCreditMTN">قبض (شارژ) دائمی ایرانسل</label>
                                </div>
                                <div class="save-information">
                                    <input type="checkbox" value="1" id="save-information" name="data[save-information]">
                                    <label for="save-information">ذخیره اطلاعات تماس </label> 
                                </div>
                            </div>
                            <div class="Bill">
                                <div class="check">
                                    <div class="bill-picture"></div>
                                    <div class="input text required billId">
                                        <input id="BillId" class="input-large" type="text" placeholder="شناسه قبض" value="" maxlength="13" name="data[BillId]">
                                    </div>
                                    <div class="input text required paymentId">
                                        <input id="PaymentId" class="input-large" type="text" placeholder="شناسه پرداخت" value="" maxlength="13" name="data[PaymentId]">
                                    </div>
                                    <div class="input text email">
                                        <input id="EmailInput" class="input-large" type="email" maxlength="50" value="" title="آدرس ایمیل را به شکل صحیح بنویسید!" rel="tooltip" placeholder="you@domain.com">
                                    </div>
                                    <div class="input text required account">
                                        <input id="dataAccountTemp" class="input-large cellphone" type="text" value="" placeholder="شماره موبایل" maxlength="11">
                                    </div>
                                    <div class="save-information">
                                        <input type="checkbox" value="1" id="save-information" name="data[save-information]">
                                        <label for="save-information">ذخیره اطلاعات تماس </label> 
                                    </div>
                                    <div class="check-bill">
                                        <div class="pay">
                                            <input class="btn-pay" id="CheckBill" type="button" class="check" value="بررسی">
                                        </div>
                                    </div>
                                </div>
                                <div class="verify">
                                    <table id="bill-info">
                                        <tbody>
                                            <tr>
                                                <td>نوع قبض</td>
                                                <td><span id="type" class="bill"></span><span id="type-title"></span></td>
                                            </tr>
                                            <tr>
                                                <td>مبلغ قبض</td>
                                                <td><span id="amount"></span> ریال</td>
                                            </tr>
                                            <tr>
                                                <td>شناسه قبض</td>
                                                <td><span id="bill-id"></span></td>
                                            </tr>
                                            <tr>
                                                <td>شناسه پرداخت</td>
                                                <td><span id="payment-id"></span></td>
                                            </tr>
                                            <tr>
                                                <td>ایمیل</td>
                                                <td><span id="email"></span></td>
                                            </tr>
                                            <tr>
                                                <td>شماره موبایل</td>
                                                <td><span id="cellphone"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="GiftCard">
                                <div class="operators">
                                    <div data-type="GooglePlay" class="operator GiftCard GooglePlay"><i></i></div>
                                    <div data-type="Microsoft" class="operator GiftCard Microsoft"><i></i></div>
                                    <div data-type="iTunes" class="operator GiftCard iTunes"><i></i></div>
                                    <div data-type="Amazon" class="operator GiftCard Amazon"><i></i></div>
                                    <div data-type="XBox" class="operator GiftCard XBox"><i></i></div>
                                    <div data-type="PlayStation" class="operator GiftCard PlayStation"><i></i></div>
                                    <div data-type="PlayStationPlus" class="operator GiftCard PlayStationPlus"><i></i></div>
                                </div>
                                <div class="buy">
                                    <div class="info">
                                        <div id="operator"></div>
                                        <div class="back-button">بازگشت</div>
                                    </div>
                                    <div class="input text giftcard-types">
                                        <select id="GiftCardTypes" class="input-large giftcard-select" name="data[ProductId]"></select>
                                        <input type="hidden" id="UnitAmount" value="0">
                                    </div>
                                    <div class="input text" >
                                        <div class="count">
                                            <span>تعداد</span>
                                                <select id="count" class="giftcard-count">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            <span>عدد</span>
                                         </div>
                                        <div class="amount-container">
                                            <span class="amount-title">مبلغ</span>
                                            <span class="amount-value"></span>
                                            <span class="amount-unit">تومان</span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="input text email">
                                        <input id="EmailInput" class="input-large" type="email" maxlength="50" value="" title="آدرس ایمیل را به شکل صحیح بنویسید!" rel="tooltip" placeholder="you@domain.com">
                                    </div>
                                    <div class="input text required account">
                                        <input id="dataAccountTemp" class="input-large cellphone" type="text" value="" placeholder="شماره موبایل" maxlength="11">
                                        <p class="warn">لطفاً شماره موبایل صحیح را وارد نمایید، اطلاعات گیفت کارت فقط به موبایل شما پیامک می شود.</p>
                                    </div>
                                    <div class="save-information">
                                        <input type="checkbox" value="1" id="save-information" name="data[save-information]">
                                        <label for="save-information">ذخیره اطلاعات تماس </label> 
                                    </div>
                                </div>
                            </div>
                            <div class="Antivirus">
                                <div class="operators">
                                    <div data-type="Eset" class="operator Antivirus Eset"><i></i></div>
                                    <div data-type="BitDefender" class="operator Antivirus BitDefender"><i></i></div>
                                    <div data-type="Kaspersky" class="operator Antivirus Kaspersky"><i></i></div>
                                    <div data-type="Norton" class="operator Antivirus Norton"><i></i></div>
                                </div>
                                <div class="buy">
                                    <div class="info">
                                        <div id="operator"></div>
                                        <div class="back-button">بازگشت</div>
                                    </div>
                                    <div class="input text antivirus-types">
                                        <select id="AntivirusTypes" class="input-large" name="data[ProductId]"></select>
                                        <input type="hidden" id="UnitAmount" value="0">
                                    </div>
                                    <div class="input text antiviruse-count">
                                        <div class="count">
                                            <span>تعداد</span>
                                                <select id="count">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            <span>عدد</span>
                                        </div>
                                        <div class="amount-container">
                                            <span class="amount-title">مبلغ</span>
                                            <span class="amount-value"></span>
                                            <span class="amount-unit">تومان</span>
                                        </div>
                                    </div>
                                    <div class="input text email">
                                        <input id="EmailInput" class="input-large" type="email" maxlength="50" value="" title="آدرس ایمیل را به شکل صحیح بنویسید!" rel="tooltip" placeholder="you@domain.com">
                                    </div>
                                    <div class="input text required account">
                                        <input id="dataAccountTemp" class="input-large cellphone" type="text" value="" placeholder="شماره موبایل" maxlength="11">
                                    </div>
                                    <div class="save-information">
                                        <input type="checkbox" value="1" id="save-information" name="data[save-information]">
                                        <label for="save-information">ذخیره اطلاعات تماس</label> 
                                    </div>
                                </div>
                            </div>
                            <div class="Application">
                                <div id="left">
                                    <div id="logo-container">
                                        <div id="logo">
                                            <img class="application" alt="mobile-application" src="<?php echo $root; ?>/img/Mobile-Charge-Application-Logo-Small.png">
                                        </div>
                                    </div>
                                </div>
                                <div id="Application-content">
                                    <ul >
                                        <h4>با دانلود نرم افزار موبایل ویژه گوشی های با سیستم عامل اندروید شما می توانید فرایند خرید انواع شارژ و پرداخت قبوض مختلف خود را به سرعت و با امنیت بالا انجام دهید.</h4>
                                        <b>برخی امکانات و قابلیت های این اپلیکیشن:</b>
                                        <li>امکان خرید آنلاین و آفلاین</li>
                                        <li>خرید آسان کارت شارژ های ایرانسل، همراه اول، تالیا و رایتل</li>
                                        <li>وارد کردن رمز شارژ فقط با یک کلیک</li>
                                        <li>امکان شارژ اتوماتیک (تاپ آپ)</li>
                                        <li>پرداخت قبوض آب، برق، گاز، تلفن ثابت، تلفن همراه، عوارض شهرداری</li>
                                        <li>مجهز به سیستم بارکدخوان جهت ورود اطلاعات سریع قبض</li>
                                        <li>ذخیره اطلاعات شارژهای خریداری شده و قبض های پرداخت شده</li>
                                        <li>دریافت اطلاعات تماس، یکبار برای همیشه</li>
                                        <li>پرداخت وجه از طریق درگاه های بانکی مختلف</li>
                                        <li>امکان موجودی گیری از سیم کارت با یک کلیک</li>
                                    </ul>
                                    <div class="application-deactive">اپلیکیشن موبایل برای این فروشگاه فعال نشده است.</div>
                                    <div class="application-submit">
                                        <div class="pay" id="download-application">
                                            <div class="download-android"></div>
                                            <div class="btn-pay">دانلود اپلیکیشن</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div id="payment-process"></div>
                                <div class="cover"></div>
                                <div class="connecting"><p></p></div>
                            </div>
                            <div class="Support">
                                <div class="phone-support"><p>پشتیبانی تلفنی<br>021-88019574</p></div>
                                <div class="yahoo-support">
                                    <a target="_blank" href="#">
                                        <img border="0" alt="yahoo-online" src="">
                                        <p class="yahoo">پشتیبانی یاهو <br> chargereseller24</p>
                                    </a>
                                </div>
                                <div class="gmail-support"><p>پشتیبانی گوگل<br>chargereseller24</p></div>
                                <div class="help-support help"><p>راهنما</p></div>
                                <div class="desktop-support"><a href="<?php echo str_replace('mobile', '', $root) . '?view=desktop'; ?>"><p>نمای دسکتاپ</p></a></div>
                            </div>
                            <div class="payment-gateways">
                                <h4>درگاه پرداخت: <i></i></h4>
                                <ul>
                                    <li id="Parsian" class="bank-Parsian" data-tooltip="پارسیان"></li>
                                    <li id="Mellat" class="bank-Mellat" data-tooltip="ملت"></li>
                                    <li id="Saman" class="bank-Saman" data-tooltip="سامان"></li>
                                    <li id="Melli" class="bank-Melli" data-tooltip="ملی"></li>
                                    <li id="Fanava" class="bank-Fanava" data-tooltip="فن آوا"></li>
                                    <li id="Zarinpal" class="bank-Zarinpal" data-tooltip="زرین پال"></li>
                                </ul>
                                <p class="caution">خرید با کلیه کارت های بانکی عضو شبکه شتاب امکان پذیر می باشد.</p>
                            </div>
                            <input type="hidden" id="dataWebserviceId" name="data[WebserviceId]">
                            <input type="hidden" id="dataRedirectUrl" name="data[RedirectUrl]" value="<?php echo $root . '/mobile/verify.php'; ?>">
                            <input type="hidden" id="dataChargeKind" name="data[ChargeKind]">
                            <input type="hidden" id="dataCellphone" name="data[Cellphone]">
                            <input type="hidden" id="dataAmount" name="data[Amount]">
                            <input type="hidden" id="dataCount" name="data[Count]">
                            <input type="hidden" id="dataEmail" name="data[Email]">
                            <input type="hidden" id="dataType" name="data[Type]">
                            <input type="hidden" id="dataIssuer" name="data[Issuer]">
                            <input type="hidden" id="dataRedirectToPage" name="data[RedirectToPage]" value="true">
                            <input type="hidden" id="dataRedirectToPage" name="data[ScriptVersion]" value="4.2">
                        </fieldset>
                        <div class="submit">
                            <div class="pay" id="pay-factor">
                                <div class="pay-submit"></div>
                                <input class="hide" type="submit">
                                <div class="btn-pay">پــــرداخـــت</div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>
	</div>
	<div id="payment-process"></div>
	<div class="cover"></div>
	<div class="connecting"><p></p></div>
	<script type="text/javascript" src="mobile/js/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="mobile/js/jquery.qtip.min.js"></script>
	<script type="text/javascript" src="mobile/js/charge.js"></script>
    <script type="text/javascript" src="mobile/js/jquery.cookie.js"></script>
	<script type="text/javascript">var WebserviceID = <?php echo '"' . $config['webserviceID'] . '"'; ?>;</script>
</body>
</html>