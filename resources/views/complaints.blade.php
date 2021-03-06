@extends('layouts.master')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading text-center">عرض الشكاوى</div>
      <div class="panel-body ">
       <div class="row ">
         <div class="col-md-12 col-sm-12 ">
          <table class="table table-bordered tabledesign" dir="rtl" >
           <thead >
            <tr>

                      <th class="text-center">الشكاوى</th>
                      <th class="text-center" style="width:15%;"> التاريخ</th>
                      <th class="text-center" style="width:10%;">

                      <label>الرد<span class="pull-left">
                          <i class="fa fa-mail-reply-all fa mr"></i></span>
                          </label>
                      </th>
                    </tr>
                 </tr>
               </thead>
               <tbody>

                <tr>
                    <td>التطبيق لا يعمل</td>
                    <td>2020-2-1</td>
                    <td>
                       {{-- <a href="{{ route('send',$Complaint->id) }}"> --}}
                         <button  type="submit" class="btn btn-primary pull-right bold" style="border-radius:10px">رد<i class="fa fa-mail-forward left mr"></i></button>
                       {{-- </a> --}}

                      </form>
                       </td>
                   </tr>

                   <tr>
                    <td>التطبيق لا يعمل</td>
                    <td>2020-2-1</td>
                    <td>
                       {{-- <a href="{{ route('send',$Complaint->id) }}"> --}}
                         <button  type="submit" class="btn btn-primary pull-right bold" style="border-radius:10px">رد<i class="fa fa-mail-forward left mr"></i></button>
                       {{-- </a> --}}

                      </form>
                       </td>
                   </tr>

                   <tr>
                    <td>التطبيق لا يعمل</td>
                    <td>2020-2-1</td>
                    <td>
                       {{-- <a href="{{ route('send',$Complaint->id) }}"> --}}
                         <button  type="submit" class="btn btn-primary pull-right bold" style="border-radius:10px">رد<i class="fa fa-mail-forward left mr"></i></button>
                       {{-- </a> --}}

                      </form>
                       </td>
                   </tr>

                   <tr>
                    <td>التطبيق لا يعمل</td>
                    <td>2020-2-1</td>
                    <td>
                       {{-- <a href="{{ route('send',$Complaint->id) }}"> --}}
                         <button  type="submit" class="btn btn-primary pull-right bold" style="border-radius:10px">رد<i class="fa fa-mail-forward left mr"></i></button>
                       {{-- </a> --}}

                      </form>
                       </td>
                   </tr>

                   <tr>
                    <td>التطبيق لا يعمل</td>
                    <td>2020-2-1</td>
                    <td>
                       {{-- <a href="{{ route('send',$Complaint->id) }}"> --}}
                         <button  type="submit" class="btn btn-primary pull-right bold" style="border-radius:10px">رد<i class="fa fa-mail-forward left mr"></i></button>
                       {{-- </a> --}}

                      </form>
                       </td>
                   </tr>

                   <tr>
                    <td>التطبيق لا يعمل</td>
                    <td>2020-2-1</td>
                    <td>
                       {{-- <a href="{{ route('send',$Complaint->id) }}"> --}}
                         <button  type="submit" class="btn btn-primary pull-right bold" style="border-radius:10px">رد<i class="fa fa-mail-forward left mr"></i></button>
                       {{-- </a> --}}

                      </form>
                       </td>
                   </tr>
                      </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div
@endsection
