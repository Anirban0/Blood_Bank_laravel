<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <x-header_dashboard/>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <x-sidebar/>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Widgets</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Recent Posts</h4>
                </div>
                <div class="comment-widgets scrollable">
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row mt-0">
                    <div class="p-2">
                      <img
                        src="../assets/images/users/1.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="font-medium">James Anderson</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end">April 14, 2021</span>
                        <button
                          type="button"
                          class="btn btn-cyan btn-sm text-white"
                        >
                          Edit
                        </button>
                        <button
                          type="button"
                          class="btn btn-success btn-sm text-white"
                        >
                          Publish
                        </button>
                        <button
                          type="button"
                          class="btn btn-danger btn-sm text-white"
                        >
                          Delete
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row">
                    <div class="p-2">
                      <img
                        src="../assets/images/users/4.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text active w-100">
                      <h6 class="font-medium">Michael Jorden</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end">May 10, 2021</span>
                        <button
                          type="button"
                          class="btn btn-cyan btn-sm text-white"
                        >
                          Edit
                        </button>
                        <button
                          type="button"
                          class="btn btn-success btn-sm text-white"
                        >
                          Publish
                        </button>
                        <button
                          type="button"
                          class="btn btn-danger btn-sm text-white"
                        >
                          Delete
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row">
                    <div class="p-2">
                      <img
                        src="../assets/images/users/5.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="font-medium">Johnathan Doeting</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end">August 1, 2021</span>
                        <button
                          type="button"
                          class="btn btn-cyan btn-sm text-white"
                        >
                          Edit
                        </button>
                        <button
                          type="button"
                          class="btn btn-success btn-sm text-white"
                        >
                          Publish
                        </button>
                        <button
                          type="button"
                          class="btn btn-danger btn-sm text-white"
                        >
                          Delete
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row">
                    <div class="p-2">
                      <img
                        src="../assets/images/users/4.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="font-medium">Johnathan Doeting</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end">August 1, 2021</span>
                        <button
                          type="button"
                          class="btn btn-cyan btn-sm text-white"
                        >
                          Edit
                        </button>
                        <button
                          type="button"
                          class="btn btn-success btn-sm text-white"
                        >
                          Publish
                        </button>
                        <button
                          type="button"
                          class="btn btn-danger btn-sm text-white"
                        >
                          Delete
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row">
                    <div class="p-2">
                      <img
                        src="../assets/images/users/3.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="font-medium">Johnathan Doeting</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end">August 1, 2021</span>
                        <button
                          type="button"
                          class="btn btn-cyan btn-sm text-white"
                        >
                          Edit
                        </button>
                        <button
                          type="button"
                          class="btn btn-success btn-sm text-white"
                        >
                          Publish
                        </button>
                        <button
                          type="button"
                          class="btn btn-danger btn-sm text-white"
                        >
                          Delete
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- accoridan part -->
              <div class="accordion" id="accordionExample">
                <div class="card mb-0">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <a
                        class="d-flex align-items-center"
                        data-toggle="collapse"
                        data-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                      >
                        <i
                          class="me-1 mdi mdi-magnet fs-4"
                          aria-hidden="true"
                        ></i>
                        <span>Accordion Example 1</span>
                      </a>
                    </h5>
                  </div>
                  <div
                    id="collapseOne"
                    class="collapse show"
                    aria-labelledby="headingOne"
                    data-parent="#accordionExample"
                  >
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life
                      accusamus terry richardson ad squid. 3 wolf moon officia
                      aute, non cupidatat skateboard dolor brunch. Food truck
                      quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                      tempor, sunt aliqua put a bird on it squid single-origin
                      coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                      helvetica, craft beer labore wes anderson cred nesciunt
                      sapiente ea proident. Ad vegan excepteur butcher vice
                      lomo. Leggings occaecat craft beer farm-to-table, raw
                      denim aesthetic synth nesciunt you probably haven't heard
                      of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="card mb-0 border-top">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <a
                        class="collapsed d-flex align-items-center"
                        data-toggle="collapse"
                        data-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                      >
                        <i
                          class="me-1 mdi mdi-magnet fs-4"
                          aria-hidden="true"
                        ></i>
                        <span>Accordion Example 2</span>
                      </a>
                    </h5>
                  </div>
                  <div
                    id="collapseTwo"
                    class="collapse"
                    aria-labelledby="headingTwo"
                    data-parent="#accordionExample"
                  >
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life
                      accusamus terry richardson ad squid. 3 wolf moon officia
                      aute, non cupidatat skateboard dolor brunch. Food truck
                      quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                      tempor, sunt aliqua put a bird on it squid single-origin
                      coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                      helvetica, craft beer labore wes anderson cred nesciunt
                      sapiente ea proident. Ad vegan excepteur butcher vice
                      lomo. Leggings occaecat craft beer farm-to-table, raw
                      denim aesthetic synth nesciunt you probably haven't heard
                      of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="card mb-0 border-top">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <a
                        class="collapsed d-flex align-items-center"
                        data-toggle="collapse"
                        data-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                      >
                        <i
                          class="me-1 mdi mdi-magnet fs-4"
                          aria-hidden="true"
                        ></i>
                        <span>Accordion Example 3</span>
                      </a>
                    </h5>
                  </div>
                  <div
                    id="collapseThree"
                    class="collapse"
                    aria-labelledby="headingThree"
                    data-parent="#accordionExample"
                  >
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life
                      accusamus terry richardson ad squid. 3 wolf moon officia
                      aute, non cupidatat skateboard dolor brunch. Food truck
                      quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                      tempor, sunt aliqua put a bird on it squid single-origin
                      coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                      helvetica, craft beer labore wes anderson cred nesciunt
                      sapiente ea proident. Ad vegan excepteur butcher vice
                      lomo. Leggings occaecat craft beer farm-to-table, raw
                      denim aesthetic synth nesciunt you probably haven't heard
                      of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
              <!-- toggle part -->
              <div id="accordian-4">
                <div class="card mt-4">
                  <a
                    class="card-header link"
                    data-toggle="collapse"
                    data-parent="#accordian-4"
                    href="#Toggle-1"
                    aria-expanded="true"
                    aria-controls="Toggle-1"
                  >
                    <i
                      class="seticon mdi mdi-arrow-right-bold"
                      aria-hidden="true"
                    ></i>
                    <span>Toggle, Open by default</span>
                  </a>
                  <div id="Toggle-1" class="collapse show multi-collapse">
                    <div class="card-body widget-content">
                      This box is opened by default, paragraphs and is full of
                      waffle to pad out the comment. Usually, you just wish
                      these sorts of comments would come to an end.
                    </div>
                  </div>
                  <a
                    class="card-header link border-top"
                    data-toggle="collapse"
                    data-parent="#accordian-4"
                    href="#Toggle-2"
                    aria-expanded="false"
                    aria-controls="Toggle-2"
                  >
                    <i class="seticon mdi mdi-close" aria-hidden="true"></i>
                    <span>Toggle, Closed by default</span>
                  </a>
                  <div id="Toggle-2" class="multi-collapse collapse" style="">
                    <div class="card-body widget-content">
                      This box is now open
                    </div>
                  </div>
                  <a
                    class="card-header collapsed link border-top"
                    data-toggle="collapse"
                    data-parent="#accordian-4"
                    href="#Toggle-3"
                    aria-expanded="false"
                    aria-controls="Toggle-3"
                  >
                    <i class="seticon mdi mdi-close" aria-hidden="true"></i>
                    <span>Toggle, Closed by default</span>
                  </a>
                  <div id="Toggle-3" class="collapse multi-collapse">
                    <div class="card-body widget-content">
                      This box is now open
                    </div>
                  </div>
                </div>
              </div>
              <!-- card new -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">News Updates</h4>
                </div>
                <ul class="list-style-none">
                  <li class="d-flex no-block card-body">
                    <i class="mdi mdi-check-circle fs-4 w-30px mt-1"></i>
                    <div>
                      <a href="#" class="mb-0 font-medium p-0"
                        >Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit.</a
                      >
                      <span class="text-muted"
                        >dolor sit amet, consectetur adipiscing</span
                      >
                    </div>
                    <div class="ms-auto">
                      <div class="tetx-right">
                        <h5 class="text-muted mb-0">20</h5>
                        <span class="text-muted font-16">Jan</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex no-block card-body border-top">
                    <i class="mdi mdi-gift fs-4 w-30px mt-1"></i>
                    <div>
                      <a href="#" class="mb-0 font-medium p-0"
                        >Congratulation Maruti, Happy Birthday</a
                      >
                      <span class="text-muted"
                        >many many happy returns of the day</span
                      >
                    </div>
                    <div class="ms-auto">
                      <div class="tetx-right">
                        <h5 class="text-muted mb-0">11</h5>
                        <span class="text-muted font-16">Jan</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex no-block card-body border-top">
                    <i class="mdi mdi-plus fs-4 w-30px mt-1"></i>
                    <div>
                      <a href="#" class="mb-0 font-medium p-0"
                        >Maruti is a Responsive Admin theme</a
                      >
                      <span class="text-muted"
                        >But already everything was solved. It will ...</span
                      >
                    </div>
                    <div class="ms-auto">
                      <div class="tetx-right">
                        <h5 class="text-muted mb-0">19</h5>
                        <span class="text-muted font-16">Jan</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex no-block card-body border-top">
                    <i class="mdi mdi-leaf fs-4 w-30px mt-1"></i>
                    <div>
                      <a href="#" class="mb-0 font-medium p-0"
                        >Envato approved Maruti Admin template</a
                      >
                      <span class="text-muted"
                        >i am very happy to approved by TF</span
                      >
                    </div>
                    <div class="ms-auto">
                      <div class="tetx-right">
                        <h5 class="text-muted mb-0">20</h5>
                        <span class="text-muted font-16">Jan</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex no-block card-body border-top">
                    <i
                      class="mdi mdi-comment-question-outline fs-4 w-30px mt-1"
                    ></i>
                    <div>
                      <a href="#" class="mb-0 font-medium p-0">
                        I am alwayse here if you have any question</a
                      >
                      <span class="text-muted"
                        >we glad that you choose our template</span
                      >
                    </div>
                    <div class="ms-auto">
                      <div class="tetx-right">
                        <h5 class="text-muted mb-0">15</h5>
                        <span class="text-muted font-16">Jan</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">Tasks</h5>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Description</th>
                      <th scope="col">Status</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Making The New Suit</td>
                      <td class="text-success">Progress</td>
                      <td>
                        <a
                          href="#"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Update"
                        >
                          <i class="mdi mdi-check"></i>
                        </a>
                        <a
                          href="#"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Delete"
                        >
                          <i class="mdi mdi-close"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>Luanch My New Site</td>
                      <td class="text-warning">Pending</td>
                      <td>
                        <a
                          href="#"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Update"
                        >
                          <i class="mdi mdi-check"></i>
                        </a>
                        <a
                          href="#"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Delete"
                        >
                          <i class="mdi mdi-close"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>Maruti Excellant Theme</td>
                      <td class="text-danger">Cancled</td>
                      <td>
                        <a
                          href="#"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Update"
                        >
                          <i class="mdi mdi-check"></i>
                        </a>
                        <a
                          href="#"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Delete"
                        >
                          <i class="mdi mdi-close"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- card new -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Recent Activity</h4>
                </div>
                <ul class="list-style-none">
                  <li class="d-flex no-block card-body">
                    <i class="mdi mdi-check-circle fs-4 w-30px mt-1"></i>
                    <div>
                      <a href="#" class="mb-0 font-medium p-0"
                        >Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit.</a
                      >
                      <span class="text-muted"
                        >dolor sit amet, consectetur adipiscing</span
                      >
                    </div>
                    <div class="ms-auto">
                      <div class="tetx-right">
                        <h5 class="text-muted mb-0">20</h5>
                        <span class="text-muted font-16">Jan</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex no-block card-body border-top">
                    <i class="mdi mdi-gift fs-4 w-30px mt-1"></i>
                    <div>
                      <a href="#" class="mb-0 font-medium p-0"
                        >Congratulation Maruti, Happy Birthday</a
                      >
                      <span class="text-muted"
                        >many many happy returns of the day</span
                      >
                    </div>
                    <div class="ms-auto">
                      <div class="tetx-right">
                        <h5 class="text-muted mb-0">11</h5>
                        <span class="text-muted font-16">Jan</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex no-block card-body border-top">
                    <i class="mdi mdi-plus fs-4 w-30px mt-1"></i>
                    <div>
                      <a href="#" class="mb-0 font-medium p-0"
                        >Maruti is a Responsive Admin theme</a
                      >
                      <span class="text-muted"
                        >But already everything was solved. It will ...</span
                      >
                    </div>
                    <div class="ms-auto">
                      <div class="tetx-right">
                        <h5 class="text-muted mb-0">19</h5>
                        <span class="text-muted font-16">Jan</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex no-block card-body border-top">
                    <i class="mdi mdi-leaf fs-4 w-30px mt-1"></i>
                    <div>
                      <a href="#" class="mb-0 font-medium p-0"
                        >Envato approved Maruti Admin template</a
                      >
                      <span class="text-muted"
                        >i am very happy to approved by TF</span
                      >
                    </div>
                    <div class="ms-auto">
                      <div class="tetx-right">
                        <h5 class="text-muted mb-0">20</h5>
                        <span class="text-muted font-16">Jan</span>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex no-block card-body border-top">
                    <i
                      class="mdi mdi-comment-question-outline fs-4 w-30px mt-1"
                    ></i>
                    <div>
                      <a href="#" class="mb-0 font-medium p-0">
                        I am alwayse here if you have any question</a
                      >
                      <span class="text-muted"
                        >we glad that you choose our template</span
                      >
                    </div>
                    <div class="ms-auto">
                      <div class="tetx-right">
                        <h5 class="text-muted mb-0">15</h5>
                        <span class="text-muted font-16">Jan</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- Tabs -->
              <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      data-toggle="tab"
                      href="#home"
                      role="tab"
                      ><span class="hidden-sm-up"></span>
                      <span class="hidden-xs-down">Tab1</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-toggle="tab"
                      href="#profile"
                      role="tab"
                      ><span class="hidden-sm-up"></span>
                      <span class="hidden-xs-down">Tab2</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-toggle="tab"
                      href="#messages"
                      role="tab"
                      ><span class="hidden-sm-up"></span>
                      <span class="hidden-xs-down">Tab3</span></a
                    >
                  </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">
                  <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="p-20">
                      <p>
                        And is full of waffle to It has multiple paragraphs and
                        is full of waffle to pad out the comment. Usually, you
                        just wish these sorts of comments would come to an
                        end.multiple paragraphs and is full of waffle to pad out
                        the comment..
                      </p>
                      <img
                        src="../assets/images/background/img4.jpg"
                        class="img-fluid"
                      />
                    </div>
                  </div>
                  <div class="tab-pane p-20" id="profile" role="tabpanel">
                    <div class="p-20">
                      <img
                        src="../assets/images/background/img4.jpg"
                        class="img-fluid"
                      />
                      <p class="mt-2">
                        And is full of waffle to It has multiple paragraphs and
                        is full of waffle to pad out the comment. Usually, you
                        just wish these sorts of comments would come to an
                        end.multiple paragraphs and is full of waffle to pad out
                        the comment..
                      </p>
                    </div>
                  </div>
                  <div class="tab-pane p-20" id="messages" role="tabpanel">
                    <div class="p-20">
                      <p>
                        And is full of waffle to It has multiple paragraphs and
                        is full of waffle to pad out the comment. Usually, you
                        just wish these sorts of comments would come to an
                        end.multiple paragraphs and is full of waffle to pad out
                        the comment..
                      </p>
                      <img
                        src="../assets/images/background/img4.jpg"
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">To Do List</h4>
                  <div class="todo-widget scrollable" style="height: 450px">
                    <ul
                      class="list-task todo-list list-group mb-0"
                      data-role="tasklist"
                    >
                      <li class="list-group-item todo-item" data-role="task">
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="customCheck"
                          />
                          <label
                            class="form-check-label w-100 mb-0 todo-label"
                            for="customCheck"
                          >
                            <span class="todo-desc"
                              >Lorem Ipsum is simply dummy text of the printing
                              and typesetting industry.</span
                            >
                            <span class="badge rounded-pill bg-danger float-end"
                              >Today</span
                            >
                          </label>
                        </div>
                        <ul class="list-style-none assignedto">
                          <li class="assignee">
                            <img
                              class="rounded-circle"
                              width="40"
                              src="../assets/images/users/1.jpg"
                              alt="user"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="Steave"
                            />
                          </li>
                          <li class="assignee">
                            <img
                              class="rounded-circle"
                              width="40"
                              src="../assets/images/users/2.jpg"
                              alt="user"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="Jessica"
                            />
                          </li>
                          <li class="assignee">
                            <img
                              class="rounded-circle"
                              width="40"
                              src="../assets/images/users/3.jpg"
                              alt="user"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="Priyanka"
                            />
                          </li>
                          <li class="assignee">
                            <img
                              class="rounded-circle"
                              width="40"
                              src="../assets/images/users/4.jpg"
                              alt="user"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="Selina"
                            />
                          </li>
                        </ul>
                      </li>
                      <li class="list-group-item todo-item" data-role="task">
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="customCheck1"
                          />
                          <label
                            class="form-check-label w-100 mb-0 todo-label"
                            for="customCheck1"
                          >
                            <span class="todo-desc"
                              >Lorem Ipsum is simply dummy text of the
                              printing</span
                            ><span
                              class="badge rounded-pill bg-primary float-end"
                              >1 week
                            </span>
                          </label>
                        </div>
                        <div class="item-date">26 jun 2021</div>
                      </li>
                      <li class="list-group-item todo-item" data-role="task">
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="customCheck2"
                          />
                          <label
                            class="form-check-label w-100 mb-0 todo-label"
                            for="customCheck2"
                          >
                            <span class="todo-desc"
                              >Give Purchase report to</span
                            >
                            <span class="badge rounded-pill bg-info float-end"
                              >Yesterday</span
                            >
                          </label>
                        </div>
                        <ul class="list-style-none assignedto">
                          <li class="assignee">
                            <img
                              class="rounded-circle"
                              width="40"
                              src="../assets/images/users/3.jpg"
                              alt="user"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="Priyanka"
                            />
                          </li>
                          <li class="assignee">
                            <img
                              class="rounded-circle"
                              width="40"
                              src="../assets/images/users/4.jpg"
                              alt="user"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="Selina"
                            />
                          </li>
                        </ul>
                      </li>
                      <li class="list-group-item todo-item" data-role="task">
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="customCheck3"
                          />
                          <label
                            class="form-check-label w-100 mb-0 todo-label"
                            for="customCheck3"
                          >
                            <span class="todo-desc"
                              >Lorem Ipsum is simply dummy text of the printing
                            </span>
                            <span
                              class="badge rounded-pill bg-warning float-end"
                              >2 weeks</span
                            >
                          </label>
                        </div>
                        <div class="item-date">26 jun 2021</div>
                      </li>
                      <li class="list-group-item todo-item" data-role="task">
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="customCheck4"
                          />
                          <label
                            class="form-check-label w-100 mb-0 todo-label"
                            for="customCheck4"
                          >
                            <span class="todo-desc"
                              >Give Purchase report to</span
                            >
                            <span class="badge rounded-pill bg-info float-end"
                              >Yesterday</span
                            >
                          </label>
                        </div>
                        <ul class="list-style-none assignedto">
                          <li class="assignee">
                            <img
                              class="rounded-circle"
                              width="40"
                              src="../assets/images/users/3.jpg"
                              alt="user"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="Priyanka"
                            />
                          </li>
                          <li class="assignee">
                            <img
                              class="rounded-circle"
                              width="40"
                              src="../assets/images/users/4.jpg"
                              alt="user"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="Selina"
                            />
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Progress Box</h4>
                  <div class="mt-3">
                    <div class="d-flex no-block align-items-center">
                      <span>81% Clicks</span>
                      <div class="ms-auto">
                        <span>125</span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped"
                        role="progressbar"
                        style="width: 81%"
                        aria-valuenow="10"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <div class="mt-4">
                    <div class="d-flex no-block align-items-center mt-3">
                      <span>72% Uniquie Clicks</span>
                      <div class="ms-auto">
                        <span>120</span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-success"
                        role="progressbar"
                        style="width: 72%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <div class="mt-4">
                    <div class="d-flex no-block align-items-center mt-3">
                      <span>53% Impressions</span>
                      <div class="ms-auto">
                        <span>785</span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-info"
                        role="progressbar"
                        style="width: 53%"
                        aria-valuenow="50"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <div class="mt-4">
                    <div class="d-flex no-block align-items-center mt-3">
                      <span>3% Online Users</span>
                      <div class="ms-auto">
                        <span>8</span>
                      </div>
                    </div>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped bg-danger"
                        role="progressbar"
                        style="width: 3%"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">Browesr statistics</h5>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Browser</th>
                      <th scope="col">Visits</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Chrome</td>
                      <td>8850</td>
                    </tr>
                    <tr>
                      <td>Firefox</td>
                      <td>1200</td>
                    </tr>
                    <tr>
                      <td>Internet Explorer</td>
                      <td>1540</td>
                    </tr>
                    <tr>
                      <td>Opera</td>
                      <td>1230</td>
                    </tr>
                    <tr>
                      <td>Safari</td>
                      <td>1590</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">Website statistics</h5>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Site</th>
                      <th scope="col">Visits</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="#" class="link">Themeforest.com</a></td>
                      <td>1240</td>
                    </tr>
                    <tr>
                      <td><a href="#" class="link">Themedesigner.in</a></td>
                      <td>1200</td>
                    </tr>
                    <tr>
                      <td><a href="#" class="link">Themedesigner.in</a></td>
                      <td>1542</td>
                    </tr>
                    <tr>
                      <td><a href="#" class="link">Themedesigner.in</a></td>
                      <td>1230</td>
                    </tr>
                    <tr>
                      <td><a href="#" class="link">Themedesigner.in</a></td>
                      <td>1542</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">Visited Pages</h5>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Page</th>
                      <th scope="col">Visits</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="#" class="link">Freebies</a></td>
                      <td>1240</td>
                    </tr>
                    <tr>
                      <td><a href="#" class="link">Blog</a></td>
                      <td>1200</td>
                    </tr>
                    <tr>
                      <td><a href="#" class="link">Work</a></td>
                      <td>1542</td>
                    </tr>
                    <tr>
                      <td><a href="#" class="link">Site Template</a></td>
                      <td>1230</td>
                    </tr>
                    <tr>
                      <td><a href="#" class="link">All categories</a></td>
                      <td>1542</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by Matrix-admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
  </body>
</html>
