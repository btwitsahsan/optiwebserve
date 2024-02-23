@extends('layouts.main')

@section('main-container')
  <!-- Start Hero -->
  <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="assets/img/portfolio_hero_bg.jpeg">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Outreach Specialist</h1>
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Outreach Specialist</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- End Hero -->

  <div class="cs-height_150 cs-height_lg_80"></div>

    <!-- Start CTA -->
    <section>
        <div class="container">
          <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1" data-src="assets/img/cta_bg.jpeg" >
            <div class="cs-shape_1"></div>
            <div class="cs-shape_1"></div>
            <div class="cs-shape_1"></div>
            <div class="cs-cta_in">
              <h2 class="cs-cta_title cs-semi_bold cs-m0">Let’s disscuse make <br>something <i>cool</i> together</h2>
              <div class="cs-height_70 cs-height_lg_30"></div>
              <a href="{{ route('contactBlade') }}" class="cs-text_btn">
                <span>Apply For Meeting</span>
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z" fill="currentColor"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End CTA -->

@endsection
