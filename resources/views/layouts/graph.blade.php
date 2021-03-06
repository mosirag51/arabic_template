@yield('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">رسم بياني يوضح عدد الطلبات  </h4>
                        <p class="category">من تاريخ بداية السنة</p>
                    </div>
                    <div class="content">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> طلبات التعويض
                                <i class="fa fa-circle text-danger"></i> طلبات
                                <i class="fa fa-circle text-warning"></i>  الطلبات الراجعة
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">نسبة الارباح خلال السنة </h4>
                        <p class="category">من تاريخ بداية السنة</p>
                    </div>
                    <div class="content">
                        <div id="chartActivity" class="ct-chart"></div>

                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> ارباح السنة
                                <i class="fa fa-circle text-danger"></i>ارباح السنوات السابقة
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
