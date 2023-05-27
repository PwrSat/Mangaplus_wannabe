<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">

  <!-- link css -->
  <link rel="stylesheet" href="../../assets/css/creators.min.css">
  <link rel="stylesheet" href="../../assets/css/module.min.css">
  <link rel="stylesheet" href="../../assets/css/modal.min.css">
  <link rel="stylesheet" href="../../assets/css/mpc.css">
  <link rel="stylesheet" href="../../assets/css/pembaharuan.css">

</head>

<body>



  <div id="content" class="mdbnContent ">
    <main class="mod-main">


      <div class="mod-container">
        <nav class="listing-filter">
          <ol>
            <li><a href="/creator/maincreators">MANGA Plus Creators</a></li>
            <li><a href="/creator/dashboard">Dashboard</a></li>
            <li>Submit</li>
          </ol>
        </nav>


        <div class="first-upload-area" data-view-select-source="">

          <p class="mod-hdg2 type1">Select your file type</p>

          <div class="btn-upload-box">
            <button class="btn-upload device" data-select-device="">
              <span class="from">from <span class="large">Device</span></span>
              <span class="note">jpg, png, mdp</span>
            </button>
            <button class="btn-upload cloud" data-select-cloud="">
              <span class="from">from <span class="large">Cloud</span></span>
              <span class="note">select from cloud</span>
            </button>
          </div>
          <div class="btn-add-box">

            <button class="btn-add" data-select-title="">Add new episode to your submission</button>


          </div>
          <p class="link-guideline">Please check the <a href="https://medibang.com/terms/terms/">Terms of Service</a> and <a href="https://medibang.com/terms/guideline/">Submission Guidelines</a> when you submit your work. </p>
        </div>

        <div class="second-upload-area" style="display:none;" data-view-upload-file="">

          <p class="mod-hdg2 type1">Select Files</p>

          <!-- モバイルで表示 -->


          <!-- PCで表示 -->

          <div class="select-file-drag-area" data-droppable-upload-file="">
            <span class="select-file-area">
              <span class="select-file">Drag and Drop Here</span>
              or
            </span>
            <input type="file" name="cover" class="cover-select-file" multiple="multiple" data-input-upload-file="">
            <button class="select-file-input" data-btn-select-file="">Select Files</button>
          </div>


          <ul class="mod-list-notice type2">
            <li><span class="list-mark">*</span>You can upload files at once. In that case, please unify the aspect ratio of each image. </li>
            <li><span class="list-mark">*</span>You can set the cover from the "Settings of information of the work" page.</li>
            <li><span class="list-mark">*</span>Maximum limit of the file size: 5MB for each page</li>
            <li><span class="list-mark">*</span>Maximum limit of the file number: 100 files in total</li>
          </ul>

          <p class="link-guideline">Please check the <a href="https://medibang.com/terms/terms/">Terms of Service</a> and <a href="https://medibang.com/terms/guideline/">Submission Guidelines</a> when you submit your work. </p>
        </div>

        <div class="third-upload-area" style="display:none;" data-view-episode="">


          <div class="setting-area">
            <p class="mod-hdg3">Page Direction</p>

            <ul class="mod-form-radio horizontal type2">

              <li>
                <label>
                  <input type="radio" name="pageProgressionDirection" title="horizontal" value="rtl">
                  <span>Horizontal</span>
                </label>
              </li>


              <li>
                <label>
                  <input type="radio" name="pageProgressionDirection" title="vertical" value="ttb">
                  <span>Vertical</span>
                </label>
              </li>

            </ul>

            <p class="mod-hdg3" data-first-page-is-spread="">Opening Page </p>
            <ul class="mod-form-radio horizontal" data-first-page-is-spread="">
              <li>
                <label>
                  <input type="radio" name="firstPageIsSpread" title="left" value="false" checked="checked">
                  <span>Left</span>
                </label>
              </li>
              <li>
                <label>
                  <input type="radio" name="firstPageIsSpread" title="right" value="true">
                  <span>A Spread</span>
                </label>
              </li>
            </ul>

          </div>

          <div class="select-area">
            <p class="mod-hdg3">Select Files</p>

            <!-- ページ送り：横　ページ起こし：左 -->
            <div class="page-container" data-area-episode-page="">
              <div class="page-item space" style="display:none;" data-empty-episode-page="">
                <div class="image-area"></div>
              </div>

              <div class="page-item" style="display:none;" data-add-episode-page="" data-droppable-add-file="">
                <div class="image-area">
                  <label>
                    <span class="icon-add"></span>
                    Add Page
                    <input id="additional-upload-field" type="file" name="file" multiple="" data-file-add-episode-page="">
                  </label>
                </div>
              </div>
            </div>

            <p class="mod-hdg3 mod-mb-5">Creator Comment</p>
            <div class="mod-form-textarea-wrap" data-textarea-wrap="" style="margin-bottom: 0px;">
              <div class="mod-form-textarea-box" data-textarea-box="">
                <textarea name="description" maxlength="1000" class="mod-form-textarea" rows="" cols="80" placeholder="" data-textarea=""></textarea>
              </div>
            </div>
          </div>

          <div class="check-area">
            <p class="mod-hdg3">Bonus Point Checklist</p>
            <ul class="mod-form-check type2 cursor-default">
              <li data-invisible-use-cloud="">
                <label>
                  <input name="checkPageSize" type="checkbox" value="true" disabled="disabled">
                  <span>To be recommended image size（1,920×2,560px）or more</span>
                </label>
              </li>
              <li data-invisible-use-cloud="">
                <label>
                  <input name="checkSamePageSize" type="checkbox" value="true" disabled="disabled">
                  <span>All of the pages have the same image size</span>
                </label>
              </li>
              <li>
                <label>
                  <input name="checkPageProgressionDirection" type="checkbox" value="true" disabled="disabled">
                  <span>Page direction is right swipe and the opening page starts from the left</span>
                </label>
              </li>

              <li>
                <label>
                  <input name="checkPageCount" type="checkbox" value="true" disabled="disabled">
                  <span>More than 8 pages</span>
                </label>
              </li>
            </ul>
            <p class="page-text">The more checks you have, the more advantages you have <a href="https://medibang.com/mpc/mom/about/" target="_blank">for the Monthly Awards<span class="icon-link">External link</span></a>.</p>
            <p class="page-text" style="display:none;" data-visible-use-cloud="">Whether your work fulfills those two points, “To be recommended image size（1,920×2,560px）or more” and “All of the pages have the same image size”, will be displayed on the details of a posted work after being checked.</p>
          </div>

          <div class="button-area">
            <div class="box-save">
              <div class="box-edit">
                <div class="mod-btn-box mod-mb-0">


                  <button class="mod-btn-send mod-mb-0" data-save-episode-and-next="" data-submit="">Save and Edit Settings</button>



                </div>
              </div>
              <button class="btn-save" data-save-episode="" data-submit="">Save The Draft</button>
            </div>

          </div>

          <div class="guideline-area">
            <p class="link-guideline">Please check the <a href="https://medibang.com/terms/terms/">Terms of Service</a> and <a href="https://medibang.com/terms/guideline/">Submission Guidelines</a> when you submit your work. </p>
          </div>

        </div>


        <!-- /mod-container -->
      </div>

    </main>
</body>

</html>