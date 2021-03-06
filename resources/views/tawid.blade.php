@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">طلب تعويض</h4>
                        </div>
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الإسم ثلاثي</label>
                                            <input type="text" class="form-control" placeholder="Company" value="محمد سراج الدين">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>إسم الوالدة</label>
<<<<<<< HEAD:resources/views/tawid.blade.php
                                            <input type="text" class="form-control" placeholder="Company" value=" مقبولة فارس موسي">                                        </div>
=======
                                            <input type="text" class="form-control" placeholder="Company" value="مقبولة فارس موسى">                                        </div>
>>>>>>> ba7af988668797200cc90dd08fb2f0afb56af47b:resources/views/hr/tawid.blade.php
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">النوع</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>ذكر</option>
                                                <option value="2">أنثي</option>
                                              </select>                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">تاريخ الميلاد</label>
                                            <input type="date" name="date">
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">نوع الشهادة</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>ميلاد</option>
                                                <option value="3">تسنين</option>
                                              </select>                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>رقم التأمين</label>
                                            <input type="text" class="form-control" placeholder="نام" value="248277287">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الرقم الوطني</label>
                                            <input type="text" class="form-control" placeholder="نام خانوادگی" value="0127673483">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ الإشتراك</label>
                                            <input type="date" class="form-control" placeholder="آدرس خانه" value=" ">   </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ الإنتهاء</label>
                                            <input type="date" class="form-control" placeholder="آدرس خانه" value="1-1-2020">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>الوظيفه</label>
                                            <input type="text" class="form-control" placeholder="شهر" value="مهندس">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>الأجر</label>
                                            <input type="text" class="form-control" placeholder="کشور" value="100000$">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
<<<<<<< HEAD:resources/views/tawid.blade.php
                                            <label>صاحب العمل</label>
                                            <input type="number" class="form-control" placeholder="کد پستی">
=======
                                            <label>إسم صاحب العمل</label>
                                            <input type="text" class="form-control" placeholder="بتروناس" value="بتروناس">
>>>>>>> ba7af988668797200cc90dd08fb2f0afb56af47b:resources/views/hr/tawid.blade.php
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info btn-fill pull-right">إرسال الطلب</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="image">
                            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
                        </div>
                        <div class="content">
                            <div class="author">
                                 <a href="#">
                                <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="...">

                                  <h4 class="title">محمد سراج<br>
                                     <small>Programmer</small>
                                  </h4>
                                </a>
                            </div>
                            <p class="description text-center"> Software Tester<br>  يعمل في هيئة علماء السودان<br>مدير شركة سوفت اوول "
                            </p>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                            <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                            <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

