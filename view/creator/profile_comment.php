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



  <main class="mod-main">
    <div class="mod-container mod-mt-10">
      <div class="author-profile-area">
        <div class="profile-box">
          <div class="author-box">
            <div class="thumb-box">
              <img class="" alt="" src="https://medibang.com/resources/images/no_icon.png">

            </div>
            <div class="name-area">
              <div class="name-block">
                <div class="name-box">
                  <div class="author-name">aiyaya_</div>

                  <a class="edit-link" href="/creator/edit_profile">
                    <div>
                      <i class="fa-solid fa-gear"></i>
                      Edit
                    </div>
                  </a>

                </div>
                <ul class="sns-share">
                </ul>
              </div>
            </div>
          </div>

        </div>

        <div class="profile-details">
          <p class="attributes-text">
          </p>
          <p class="mod-text" data-author-preview-user-info=""></p>
        </div>
      </div>

      <nav class="mod-nav-type full">
        <ul>
          <li>
            <a href="/creator/profile">
              Like
            </a>
          </li>
          <li class="on">
            <a href="/creator/profile_comment">
              Comment
            </a>
          </li>

        </ul>
      </nav>


      <div class="mod-ct-comments responsive" data-mpc-comment-list="">

        <div class="author-comment" data-comment-area="comment-12941608">
          <div class="comment-item">
            <div class="title-area">
              <span class="comment-type">
                Comment

              </span> <a href="https://medibang.com/mpc/titles/xq2212180137074060023405573/" class="work-title">WHITE</a>
            </div>
            <div class="image-area">
              <a href="https://medibang.com/mpc/episodes/n12304090020308560023405573/" class="work-thumb"> <span class="work-thumb-issue">
                  #020

                </span> <img src="https://dthezntil550i.cloudfront.net/xq/latest/xq2212180137074060023405573/cc18122b-cc69-4d38-b60c-a72f14e284e1_t.jpg" alt="">
              </a>
            </div>


            <div class="comment-area" data-comment-text="comment-12941608">
              <a href="https://medibang.com/mpc/episodes/n12304090020308560023405573/last/?commentId=12941608" class="comment-text">


                <p>KERENN<br></p>


              </a>
            </div>
            <div class="info-area">
              <time class="comment-date">1 month ago</time>

              <ul class="comment-control">

                <li>
                  <!-- {{-- <button class="btn-like " data-comment-like="comment-12941608">
                              <span class="control-text">Like</span><span class="btn-like-count" data-comment-like-count="comment-12941608">1</span>
                              </button> --}} -->
                  <button class="btn btn-danger">
                    <i class="fa-sharp fa-solid fa-heart"> 2</i>
                  </button>
                </li>


                <li>
                  <!-- {{-- <button class="btn-delete" data-comment-show-delete-popup="comment-12941608">
                                <span class="control-text">Delete</span>
                              </button> --}} -->
                  <button type="button" class="btn btn-danger" id="delete">
                    <i class="fa-solid fa-trash"></i> Delete
                  </button>
                </li>

              </ul>

            </div>
          </div>

          <div class="reply-area" data-comment-reply-area="12941608">
            <button class="btn-toggle" data-comment-show-reply="12941608">


              View 1 reply

            </button>
            <button class="btn-toggle is-open" style="display: none;" data-comment-hide-reply="12941608">


              Hide 1 reply

            </button>
          </div>

        </div>

      </div>



      <div class="mod-pagination-area" data-mpc-pagination-area=""></div>






      <!-- /mod-container -->
    </div>



  </main>

  @endsection

  @section('script')

  <script>
    $(function() {
      $(document).on('click', '#delete', function(e) {

        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })
      });

    });
  </script>
</body>

</html>