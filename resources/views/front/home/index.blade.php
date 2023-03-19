@extends('layouts.app')

@section('title', 'عقارماب | إبحث عن عقارات للبيع وللايجار بالتقسيط او كاش في مصر')

@section('styles')

@endsection

@section('content')
    @include('front.includes.main_image')

    <div class="container mt-new-seaction">
        <div class="row">
            <div class="col-12">
                <h2 class="header-title text-black">تقارير الكمبوندات</h2>
            </div>
        </div>
        <div class="row mt-3 mb-2">
            <div class="col-lg-4 col-12">
                <select class="dropdown-element mb-3">
                    <option value="" class="">كل المناطق</option>
                    <option value="0" label="100,000">منطقه 1</option>
                    <option value="1" label="200,000">منطقه 2</option>
                </select>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <select class="dropdown-element mb-3">
                    <option value="" class="">كل الاسعار</option>
                    <option value="0">100,000</option>
                    <option value="1">200,000</option>
                </select>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <select class="dropdown-element mb-3">
                    <option value="" class="">كل الانواع</option>
                    <option value="0">نوع 1</option>
                    <option value="1">نوع 2</option>
                </select>
            </div>
            <div class="col-12" id="inputWrapper" style="display:none;">
                <input type="text" class="w-100 input-search mb-3" placeholder="اسم الكمبوند او المطور"/>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="second-title text-black">360 كمبوند متاح</h3>
                </div>
                <div id="">
                    <button onclick="clickMe()" id="searchDiv">
                        <span id="txt1" class="text-bold">
                            ابحث باسم الكمبوند
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <span id="txt2" class="text-bold" style="display:none;">
                            خيارات بحث اقل
                            <i class="fas fa-chevron-up"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="empty-search mt-5 text-center d-flex align-items-center justify-content-center">
                    <div>
                        <div>
                            <i class="far fa-map"></i>
                        </div>
                        <p class="text-bold">
                            لا توجد مشاريع تطابق بحثك , يرجى البحث على هذا الزرار
                            <a href="#" class="">
                                للبحث من جديد
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-hover mt-4">
                    <tr class="table-header">
                        <th class="cell-name">اسم الكمبوند</th>
                        <th class="cell">
                            <a href="#" class="table-link">
                                شكاوى
                            </a>
                        </th>
                        <th class="cell"><a href="#" class="table-link">خبراء</a></th>
                        <th class="cell">الحاله</th>
                    </tr>
                    <tr class="active">
                        <td>
                            <span class="d-block">مفيدا</span>
                            <span class="second-head">اعمار</span>
                        </td>
                        <td>5</td>
                        <td>2</td>
                        <td>
                            <span class="badge badge-open">مفتوح</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-block">مفيدا</span>
                            <span class="second-head">اعمار</span>
                        </td>
                        <td>5</td>
                        <td>2</td>
                        <td><span class="badge badge-close">مغلق</span></td>
                    </tr>
                    <tr class="active">
                        <td>
                            <span class="d-block">مفيدا</span>
                            <span class="second-head">اعمار</span>
                        </td>
                        <td>5</td>
                        <td>2</td>
                        <td><span class="badge badge-open">مفتوح</span></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="pagination d-flex justify-content-center align-items-center">
                    <button class="btn d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="btn--icon" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <div class="pages">
                        <a class="page d-flex justify-content-center align-items-center">1</a>
                        <a class="page d-flex justify-content-center align-items-center">2</a>
                        <a class="page d-flex justify-content-center align-items-center active">3</a>
                        <a class="page d-flex justify-content-center align-items-center">4</a>
                        <a class="page d-flex justify-content-center align-items-center">5</a>
                    </div>
                    <button class="btn d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="btn--icon" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection

