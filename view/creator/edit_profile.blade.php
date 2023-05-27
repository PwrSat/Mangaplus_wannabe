@extends('creator.creators')

@section('creators')

<main class="mod-main">

      <div class="mod-container">
        <nav class="listing-filter">
          <ol>
            <li><a href="https://medibang.com/mpc/">MANGA Plus Creators</a></li>
            <li><a href="https://medibang.com/mpc/dashboard/">Dashboard</a></li>
            <li>Profile settings</li>
          </ol>
        </nav>
        <div class="setting-hdg1">
          <h1 class="mod-hdg1 type2">Profile settings</h1>
        </div>
        <form id="mpcDashboardSettingsForm" classname="mod-form" action="/medibang-web/mpc/dashboard/settings/;jsessionid=6B65711525F95430A9CE5E0BBB92B511" method="post">
        <div class="mod-form">
          <p class="mod-form-error" data-mpc-error="" style="display:none;"></p>
          <div class="mod-form-item">
            <p class="mod-form-title">User Name</p>
            <ul class="mod-form-notice horizontal">
              <li><span>*</span><span>This information will be displayed on public</span></li>
              <li><span>*</span><span>This information will be shared with your MediBang account</span></li>
            </ul>
            <div class="mod-form-input-box">
              <input id="handleName" name="" data-mpc-handalename="" placeholder="" maxlength="32" class="mod-form-input" type="text" value="aiyaya_">
            </div>
            <p class="mod-form-error" data-mpc-handlename-error="" style="display:none;"></p>
          </div>
          <div class="mod-form-item">
            <p class="mod-form-title">Summary</p>
            <ul class="mod-form-notice horizontal">
              <li><span>*</span><span>This information will be displayed on public</span></li>
              <li><span>*</span><span>This information will be shared with your MediBang account</span></li>
            </ul>
            <div class="mod-form-textarea-wrap" data-textarea-wrap="" style="margin-bottom: -9.42773px;">
              <div class="mod-form-textarea-box" data-textarea-box="">
                <textarea id="userInfo" name="" data-mpc-userinfo="" maxlength="512" class="mod-form-textarea" rows="" cols="80" placeholder="" data-textarea=""></textarea>
              </div>
            </div>
            <p class="mod-form-error" data-mpc-userinfo-error="" style="display:none;"></p>
          </div>
          <div class="mod-form-item">
            <p class="mod-form-title">Region</p>
            <ul class="mod-form-notice horizontal">
              <li><span>*</span><span>This information will be displayed on public</span></li>
              <li><span>*</span><span>This information will be shared with your MediBang account</span></li>
              <!-- <li><span>*</span><span>Please don’t write identifiable personal info</span></li> -->
            </ul>
            <div class="mod-lyt-fluid">
              <div class="col sp:col6 tb:col6 pc:col7">
                <div class="mod-form-input-box">
                  <input id="workPlace" name="workPlace" data-mpc-work-place="" maxlength="64" placeholder="" class="mod-form-input" type="text" value="">
                </div>
                <p class="mod-form-error" data-mpc-work-place-error="" style="display:none;"></p>
              </div>
              <div class="col sp:col4 tb:col4 pc:col3">
                <select class="form-select form-select-lg mb-3 bg-primary text-white" aria-label=".form-select-lg example">
                  <option selected>Please Select</option>
                  <option value="1" id="workPlacePubLevel1" name="workPlacePubLevel" title="Public" type="radio">Public</option>
                  <option value="2" id="workPlacePubLevel2" name="workPlacePubLevel" title="Friends only" type="radio">Friends-only</option>
                  {{-- yang friend only ini bole diapus ajasi, gausa dipake --}}
                  <option value="3" id="workPlacePubLevel3" name="workPlacePubLevel" title="Private" type="radio">Private</option>
                </select>
              </div>
            </div>
          </div>
          <div class="mod-form-item">
            <p class="mod-form-title">Age</p>
            <ul class="mod-form-notice horizontal">
              <li><span>*</span><span>This information will be displayed on public</span></li>
            </ul>
            <div class="mod-lyt-fluid">
              <div class="col sp:col6 tb:col6 pc:col7">
                <select class="form-select form-select-lg mb-3 bg-primary text-white" aria-label=".form-select-lg example">
                  <option selected>Please Select</option>
                  <option id="ageGroup1" name="ageGroup" title="Teens " type="radio" value="01">Teens</option>
                  <option id="ageGroup2" name="ageGroup" title="20s " type="radio" value="02">20s</option>
                  <option id="ageGroup3" name="ageGroup" title="30s " type="radio" value="03">30s</option>
                  <option id="ageGroup4" name="ageGroup" title="40s " type="radio" value="04">40s</option>
                  <option id="ageGroup5" name="ageGroup" title="over-50s " type="radio" value="05">50s</option>
                </select>

              </div>
              <div class="col sp:col4 tb:col4 pc:col3">

                <select class="form-select form-select-lg mb-3 bg-primary text-white" aria-label=".form-select-lg example">
                  <option selected>Please Select</option>
                  <option value="1" id="ageGroupPubLevel1" name="ageGroupPubLevel" title="Public" type="radio">Public</option>
                  <option value="2" id="ageGroupPubLevel2" name="ageGroupPubLevel" title="Friends only" type="radio">Friends-only</option>
                  {{-- yang friend only ini bole diapus ajasi, gausa dipake --}}
                  <option value="3" id="ageGroupPubLevel3" name="ageGroupPubLevel" title="Private" type="radio">Private</option>
                </select>

              </div>
            </div>
          </div>



          <div class="mod-form-item">
            <p class="mod-form-title">Language</p>
            <ul class="mod-form-notice horizontal">
              <li><span>*</span><span>This information will be displayed on public</span></li>
            </ul>
            <ul class="mod-form-check type1 col3">
              <li>
                <label>
                  <input id="localeEn" name="localeEn" data-mpc-locale="" type="checkbox" value="en">
                  <span>English</span>
                </label>
              </li>
              <li>
                <label>
                  <input id="localeInd" name="localeInd" data-mpc-locale="" type="checkbox" value="es">
                  <span>Indonesia</span>
                </label>
              </li>
            </ul>
            <p class="mod-form-error" data-mpc-locale-error="" style="display:none;"></p>
          </div>

          <div class="mod-form-item">
            <p class="mod-form-title">Manga Creator Level</p>
            <ul class="mod-form-notice horizontal">
              <li><span>*</span><span>This information will be displayed on public</span></li>
            </ul>
            <select class="form-select form-select-lg mb-3 bg-primary text-white" aria-label=".form-select-lg example">
              <option selected>Please Select</option>
              <option value="1" id="workMotivLevel1" name="workMotivLevel" title="Full time" type="radio">Full Time</option>
              <option value="2" id="workMotivLevel2" name="workMotivLevel" title="Part time" type="radio">Part Time</option>
              <option value="3" id="workMotivLevel3" name="workMotivLevel" title="Bobby" type="radio">Hobby</option>
            </select>

          </div>
          <div class="mod-form-item">
            <p class="mod-form-title">My Background as a Manga Creator</p>
            <ul class="mod-form-notice horizontal">
              <li><span>*</span><span>This information will be displayed on public</span></li>
            </ul>
            <div class="mod-form-textarea-wrap" data-textarea-wrap="">
              <div class="mod-form-textarea-box" data-textarea-box="">
                <textarea id="workHistory" name="workHistory" maxlength="1000" class="mod-form-textarea" cols="80"></textarea>
                <p class="mod-form-error" data-mpc-work-history-error="" style="display:none;"></p>
              </div>
            </div>
          </div>
        </div>
        <div>
    </div></form>
        <div class="mod-btn-box">
          <button class="mod-btn-send" data-submit-settings="">Save</button>
        </div>
      <!-- /mod-container --></div>

    </main>

@endsection
