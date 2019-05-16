<?php

/* MiBundle::templateApp.html.twig */
class __TwigTemplate_5e98e038c1f1da598d0819682aad7084ba41497c40245e0b799a85960347f7b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9a7ab4a495739ef268f6446d1eccfc45ca280aa35987105b4fdfcd567f8fe70 = $this->env->getExtension("native_profiler");
        $__internal_e9a7ab4a495739ef268f6446d1eccfc45ca280aa35987105b4fdfcd567f8fe70->enter($__internal_e9a7ab4a495739ef268f6446d1eccfc45ca280aa35987105b4fdfcd567f8fe70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiBundle::templateApp.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  ";
        // line 9
        $this->displayBlock('styles', $context, $blocks);
        // line 43
        echo "</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

  <header class=\"main-header\">
    <!-- Logo -->
    <a href=\"index2.html\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\">
      <!-- Sidebar toggle button-->
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
      </a>

      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
          <!-- Messages: style can be found in dropdown.less-->
          <li class=\"dropdown messages-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"fa fa-envelope-o\"></i>
              <span class=\"label label-success\">4</span>
            </a>
            <ul class=\"dropdown-menu\">
              <li class=\"header\">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class=\"menu\">
                  <li><!-- start message -->
                    <a href=\"#\">
                      <div class=\"pull-left\">
                        <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                      </div>
                      <h4>
                        Support Team
                        <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href=\"#\">
                      <div class=\"pull-left\">
                        <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href=\"#\">
                      <div class=\"pull-left\">
                        <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                      </div>
                      <h4>
                        Developers
                        <small><i class=\"fa fa-clock-o\"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href=\"#\">
                      <div class=\"pull-left\">
                        <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href=\"#\">
                      <div class=\"pull-left\">
                        <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class=\"dropdown notifications-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"fa fa-bell-o\"></i>
              <span class=\"label label-warning\">10</span>
            </a>
            <ul class=\"dropdown-menu\">
              <li class=\"header\">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class=\"menu\">
                  <li>
                    <a href=\"#\">
                      <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href=\"#\">
                      <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href=\"#\">
                      <i class=\"fa fa-users text-red\"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href=\"#\">
                      <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href=\"#\">
                      <i class=\"fa fa-user text-red\"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class=\"footer\"><a href=\"#\">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class=\"dropdown tasks-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"fa fa-flag-o\"></i>
              <span class=\"label label-danger\">9</span>
            </a>
            <ul class=\"dropdown-menu\">
              <li class=\"header\">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class=\"menu\">
                  <li><!-- Task item -->
                    <a href=\"#\">
                      <h3>
                        Design some buttons
                        <small class=\"pull-right\">20%</small>
                      </h3>
                      <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\"
                             aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                          <span class=\"sr-only\">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href=\"#\">
                      <h3>
                        Create a nice theme
                        <small class=\"pull-right\">40%</small>
                      </h3>
                      <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\"
                             aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                          <span class=\"sr-only\">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href=\"#\">
                      <h3>
                        Some task I need to do
                        <small class=\"pull-right\">60%</small>
                      </h3>
                      <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\"
                             aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                          <span class=\"sr-only\">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href=\"#\">
                      <h3>
                        Make beautiful transitions
                        <small class=\"pull-right\">80%</small>
                      </h3>
                      <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\"
                             aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                          <span class=\"sr-only\">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class=\"footer\">
                <a href=\"#\">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">Alexander Pierce</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class=\"user-body\">
                <div class=\"row\">
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Followers</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Sales</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
      <!-- Sidebar user panel -->
      <div class=\"user-panel\">
        <div class=\"pull-left image\">
          <img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
          <p>Alexander Pierce</p>
          <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action=\"#\" method=\"get\" class=\"sidebar-form\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
          <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class=\"sidebar-menu\" data-widget=\"tree\">
        <li class=\"header\">MAIN NAVIGATION</li>
        <li class=\"active treeview\">
          <a href=\"#\">
            <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li class=\"active\"><a href=\"\"><i class=\"fa fa-circle-o\"></i> Dashboard v1</a></li>
            <li><a href=\"index2.html\"><i class=\"fa fa-circle-o\"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-files-o\"></i>
            <span>Layout Options</span>
            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/layout/top-nav.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Top Navigation</a></li>
            <li><a href=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/layout/boxed.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Boxed</a></li>
            <li><a href=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/layout/fixed.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Fixed</a></li>
            <li><a href=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/layout/collapsed-sidebar.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/widgets.html"), "html", null, true);
        echo "\">
            <i class=\"fa fa-th\"></i> <span>Widgets</span>
            <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-green\">new</small>
            </span>
          </a>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-pie-chart\"></i>
            <span>Charts</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/charts/chartjs.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> ChartJS</a></li>
            <li><a href=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/charts/morris.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
            <li><a href=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/charts/flot.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
            <li><a href=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/charts/inline.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-laptop\"></i>
            <span>UI Elements</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/UI/general.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> General</a></li>
            <li><a href=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/UI/icons.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
            <li><a href=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/UI/buttons.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
            <li><a href=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/UI/sliders.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
            <li><a href=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/UI/timeline.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
            <li><a href=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/UI/modals.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Modals</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-edit\"></i> <span>Forms</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/forms/general.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
            <li><a href=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/forms/advanced.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
            <li><a href=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/forms/editors.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-table\"></i> <span>Tables</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/tables/simple.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
            <li><a href=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/tables/data.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/calendar.html"), "html", null, true);
        echo "\">
            <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
            <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-red\">3</small>
              <small class=\"label pull-right bg-blue\">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/mailbox/mailbox.html"), "html", null, true);
        echo "\">
            <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
            <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-yellow\">12</small>
              <small class=\"label pull-right bg-green\">16</small>
              <small class=\"label pull-right bg-red\">5</small>
            </span>
          </a>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-folder\"></i> <span>Examples</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/examples/invoice.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Invoice</a></li>
            <li><a href=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/examples/profile.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Profile</a></li>
            <li><a href=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/examples/login.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Login</a></li>
            <li><a href=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/examples/register.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Register</a></li>
            <li><a href=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/examples/lockscreen.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
            <li><a href=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/examples/404.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> 404 Error</a></li>
            <li><a href=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/examples/500.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> 500 Error</a></li>
            <li><a href=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/examples/blank.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Blank Page</a></li>
            <li><a href=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/examples/pace.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-share\"></i> <span>Multilevel</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
            <li class=\"treeview\">
              <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One
                <span class=\"pull-right-container\">
                  <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two</a></li>
                <li class=\"treeview\">
                  <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two
                    <span class=\"pull-right-container\">
                      <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                  </a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href=\"https://adminlte.io/docs\"><i class=\"fa fa-book\"></i> <span>Documentation</span></a></li>
        <li class=\"header\">LABELS</li>
        <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
        <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
        <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
           <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
      <!-- Main content -->
      <section class=\"content\">
        ";
        // line 515
        $this->displayBlock('content', $context, $blocks);
        // line 519
        echo "      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
 
  <footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2019 <a href=\"https://www.dpsolutions.com.ar\">DP Solutions</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Create the tabs -->
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
      <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
      <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
      <!-- Home tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
        <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-user bg-yellow\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Custom Template Design
                <span class=\"label label-danger pull-right\">70%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Update Resume
                <span class=\"label label-success pull-right\">95%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Laravel Integration
                <span class=\"label label-warning pull-right\">50%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Back End Framework
                <span class=\"label label-primary pull-right\">68%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
        <form method=\"post\">
          <h3 class=\"control-sidebar-heading\">General Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Report panel usage
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Allow mail redirect
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Expose author name in posts
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Show me as online
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Turn off notifications
              <input type=\"checkbox\" class=\"pull-right\">
            </label>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Delete chat history
              <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->
";
        // line 727
        $this->displayBlock('scripts', $context, $blocks);
        // line 769
        echo "
</body>
</html>";
        
        $__internal_e9a7ab4a495739ef268f6446d1eccfc45ca280aa35987105b4fdfcd567f8fe70->leave($__internal_e9a7ab4a495739ef268f6446d1eccfc45ca280aa35987105b4fdfcd567f8fe70_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b918980a4618caf512fe2ef3cee0b291c3b55b39293234d62efd1a35622d945 = $this->env->getExtension("native_profiler");
        $__internal_5b918980a4618caf512fe2ef3cee0b291c3b55b39293234d62efd1a35622d945->enter($__internal_5b918980a4618caf512fe2ef3cee0b291c3b55b39293234d62efd1a35622d945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin LTE ";
        
        $__internal_5b918980a4618caf512fe2ef3cee0b291c3b55b39293234d62efd1a35622d945->leave($__internal_5b918980a4618caf512fe2ef3cee0b291c3b55b39293234d62efd1a35622d945_prof);

    }

    // line 9
    public function block_styles($context, array $blocks = array())
    {
        $__internal_d3df8b1fc85594976a13cd7883c406aa67f657d06b65f54814271578591f5311 = $this->env->getExtension("native_profiler");
        $__internal_d3df8b1fc85594976a13cd7883c406aa67f657d06b65f54814271578591f5311->enter($__internal_d3df8b1fc85594976a13cd7883c406aa67f657d06b65f54814271578591f5311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 10
        echo "      <!-- Bootstrap 3.3.7 -->
      <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
      <!-- Font Awesome -->
      <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
      <!-- Ionicons -->
      <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
      <!-- Theme style -->
      <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
      <!-- Morris chart -->
      <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/morris.js/morris.css"), "html", null, true);
        echo "\">
      <!-- jvectormap -->
      <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/jvectormap/jquery-jvectormap.css"), "html", null, true);
        echo "\">
      <!-- Date Picker -->
      <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">
      <!-- Daterange picker -->
      <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">


      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
      <![endif]-->

      <!-- Google Font -->
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
  ";
        
        $__internal_d3df8b1fc85594976a13cd7883c406aa67f657d06b65f54814271578591f5311->leave($__internal_d3df8b1fc85594976a13cd7883c406aa67f657d06b65f54814271578591f5311_prof);

    }

    // line 515
    public function block_content($context, array $blocks = array())
    {
        $__internal_47a8184562503a019896592af92ee8176f4c3364e614305a7e73d943af59e088 = $this->env->getExtension("native_profiler");
        $__internal_47a8184562503a019896592af92ee8176f4c3364e614305a7e73d943af59e088->enter($__internal_47a8184562503a019896592af92ee8176f4c3364e614305a7e73d943af59e088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 516
        echo "

        ";
        
        $__internal_47a8184562503a019896592af92ee8176f4c3364e614305a7e73d943af59e088->leave($__internal_47a8184562503a019896592af92ee8176f4c3364e614305a7e73d943af59e088_prof);

    }

    // line 727
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_866b6e03df07f263ab76baa2a072a7cc70443d37329eb63c7ed255cf0bf9e285 = $this->env->getExtension("native_profiler");
        $__internal_866b6e03df07f263ab76baa2a072a7cc70443d37329eb63c7ed255cf0bf9e285->enter($__internal_866b6e03df07f263ab76baa2a072a7cc70443d37329eb63c7ed255cf0bf9e285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 728
        echo "    
    <!-- jQuery 3 -->
    <script src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morris.js charts -->
    <script src=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 743
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/jquery-knob/dist/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 753
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 757
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 759
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 765
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
    

";
        
        $__internal_866b6e03df07f263ab76baa2a072a7cc70443d37329eb63c7ed255cf0bf9e285->leave($__internal_866b6e03df07f263ab76baa2a072a7cc70443d37329eb63c7ed255cf0bf9e285_prof);

    }

    public function getTemplateName()
    {
        return "MiBundle::templateApp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1053 => 765,  1048 => 763,  1043 => 761,  1038 => 759,  1033 => 757,  1028 => 755,  1023 => 753,  1018 => 751,  1014 => 750,  1009 => 748,  1004 => 746,  1000 => 745,  995 => 743,  990 => 741,  986 => 740,  981 => 738,  972 => 732,  967 => 730,  963 => 728,  957 => 727,  948 => 516,  942 => 515,  922 => 30,  917 => 28,  912 => 26,  907 => 24,  902 => 22,  897 => 20,  891 => 17,  886 => 15,  881 => 13,  876 => 11,  873 => 10,  867 => 9,  855 => 6,  846 => 769,  844 => 727,  634 => 519,  632 => 515,  580 => 466,  576 => 465,  572 => 464,  568 => 463,  564 => 462,  560 => 461,  556 => 460,  552 => 459,  548 => 458,  528 => 441,  516 => 432,  509 => 428,  505 => 427,  491 => 416,  487 => 415,  483 => 414,  469 => 403,  465 => 402,  461 => 401,  457 => 400,  453 => 399,  449 => 398,  434 => 386,  430 => 385,  426 => 384,  422 => 383,  403 => 367,  396 => 363,  392 => 362,  388 => 361,  384 => 360,  339 => 318,  288 => 270,  279 => 264,  139 => 127,  124 => 115,  109 => 103,  94 => 91,  78 => 78,  41 => 43,  39 => 9,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <title>{% block title %}Admin LTE {% endblock %}</title>*/
/*   <!-- Tell the browser to be responsive to screen width -->*/
/*   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*   {% block styles %}*/
/*       <!-- Bootstrap 3.3.7 -->*/
/*       <link rel="stylesheet" href="{{ asset('bundles/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">*/
/*       <!-- Font Awesome -->*/
/*       <link rel="stylesheet" href="{{ asset('bundles/bower_components/font-awesome/css/font-awesome.min.css')}}">*/
/*       <!-- Ionicons -->*/
/*       <link rel="stylesheet" href="{{ asset('bundles/bower_components/Ionicons/css/ionicons.min.css')}}">*/
/*       <!-- Theme style -->*/
/*       <link rel="stylesheet" href="{{ asset('bundles/dist/css/AdminLTE.min.css')}}">*/
/*       <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*            folder instead of downloading all of them to reduce the load. -->*/
/*       <link rel="stylesheet" href="{{ asset('bundles/dist/css/skins/_all-skins.min.css')}}">*/
/*       <!-- Morris chart -->*/
/*       <link rel="stylesheet" href="{{ asset('bundles/bower_components/morris.js/morris.css')}}">*/
/*       <!-- jvectormap -->*/
/*       <link rel="stylesheet" href="{{ asset('bundles/bower_components/jvectormap/jquery-jvectormap.css')}}">*/
/*       <!-- Date Picker -->*/
/*       <link rel="stylesheet" href="{{ asset('bundles/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">*/
/*       <!-- Daterange picker -->*/
/*       <link rel="stylesheet" href="{{ asset('bundles/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">*/
/*       <!-- bootstrap wysihtml5 - text editor -->*/
/*       <link rel="stylesheet" href="{{ asset('bundles/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">*/
/* */
/* */
/*       <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*       <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*       <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*       <![endif]-->*/
/* */
/*       <!-- Google Font -->*/
/*       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">*/
/*   {% endblock %}*/
/* </head>*/
/* <body class="hold-transition skin-blue sidebar-mini">*/
/* <div class="wrapper">*/
/* */
/*   <header class="main-header">*/
/*     <!-- Logo -->*/
/*     <a href="index2.html" class="logo">*/
/*       <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*       <span class="logo-mini"><b>A</b>LT</span>*/
/*       <!-- logo for regular state and mobile devices -->*/
/*       <span class="logo-lg"><b>Admin</b>LTE</span>*/
/*     </a>*/
/*     <!-- Header Navbar: style can be found in header.less -->*/
/*     <nav class="navbar navbar-static-top">*/
/*       <!-- Sidebar toggle button-->*/
/*       <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*       </a>*/
/* */
/*       <div class="navbar-custom-menu">*/
/*         <ul class="nav navbar-nav">*/
/*           <!-- Messages: style can be found in dropdown.less-->*/
/*           <li class="dropdown messages-menu">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*               <i class="fa fa-envelope-o"></i>*/
/*               <span class="label label-success">4</span>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*               <li class="header">You have 4 messages</li>*/
/*               <li>*/
/*                 <!-- inner menu: contains the actual data -->*/
/*                 <ul class="menu">*/
/*                   <li><!-- start message -->*/
/*                     <a href="#">*/
/*                       <div class="pull-left">*/
/*                         <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*                       </div>*/
/*                       <h4>*/
/*                         Support Team*/
/*                         <small><i class="fa fa-clock-o"></i> 5 mins</small>*/
/*                       </h4>*/
/*                       <p>Why not buy a new awesome theme?</p>*/
/*                     </a>*/
/*                   </li>*/
/*                   <!-- end message -->*/
/*                   <li>*/
/*                     <a href="#">*/
/*                       <div class="pull-left">*/
/*                         <img src="{{ asset('bundles/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">*/
/*                       </div>*/
/*                       <h4>*/
/*                         AdminLTE Design Team*/
/*                         <small><i class="fa fa-clock-o"></i> 2 hours</small>*/
/*                       </h4>*/
/*                       <p>Why not buy a new awesome theme?</p>*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="#">*/
/*                       <div class="pull-left">*/
/*                         <img src="{{ asset('bundles/dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">*/
/*                       </div>*/
/*                       <h4>*/
/*                         Developers*/
/*                         <small><i class="fa fa-clock-o"></i> Today</small>*/
/*                       </h4>*/
/*                       <p>Why not buy a new awesome theme?</p>*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="#">*/
/*                       <div class="pull-left">*/
/*                         <img src="{{ asset('bundles/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">*/
/*                       </div>*/
/*                       <h4>*/
/*                         Sales Department*/
/*                         <small><i class="fa fa-clock-o"></i> Yesterday</small>*/
/*                       </h4>*/
/*                       <p>Why not buy a new awesome theme?</p>*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="#">*/
/*                       <div class="pull-left">*/
/*                         <img src="{{ asset('bundles/dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">*/
/*                       </div>*/
/*                       <h4>*/
/*                         Reviewers*/
/*                         <small><i class="fa fa-clock-o"></i> 2 days</small>*/
/*                       </h4>*/
/*                       <p>Why not buy a new awesome theme?</p>*/
/*                     </a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*               <li class="footer"><a href="#">See All Messages</a></li>*/
/*             </ul>*/
/*           </li>*/
/*           <!-- Notifications: style can be found in dropdown.less -->*/
/*           <li class="dropdown notifications-menu">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*               <i class="fa fa-bell-o"></i>*/
/*               <span class="label label-warning">10</span>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*               <li class="header">You have 10 notifications</li>*/
/*               <li>*/
/*                 <!-- inner menu: contains the actual data -->*/
/*                 <ul class="menu">*/
/*                   <li>*/
/*                     <a href="#">*/
/*                       <i class="fa fa-users text-aqua"></i> 5 new members joined today*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="#">*/
/*                       <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the*/
/*                       page and may cause design problems*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="#">*/
/*                       <i class="fa fa-users text-red"></i> 5 new members joined*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="#">*/
/*                       <i class="fa fa-shopping-cart text-green"></i> 25 sales made*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="#">*/
/*                       <i class="fa fa-user text-red"></i> You changed your username*/
/*                     </a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*               <li class="footer"><a href="#">View all</a></li>*/
/*             </ul>*/
/*           </li>*/
/*           <!-- Tasks: style can be found in dropdown.less -->*/
/*           <li class="dropdown tasks-menu">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*               <i class="fa fa-flag-o"></i>*/
/*               <span class="label label-danger">9</span>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*               <li class="header">You have 9 tasks</li>*/
/*               <li>*/
/*                 <!-- inner menu: contains the actual data -->*/
/*                 <ul class="menu">*/
/*                   <li><!-- Task item -->*/
/*                     <a href="#">*/
/*                       <h3>*/
/*                         Design some buttons*/
/*                         <small class="pull-right">20%</small>*/
/*                       </h3>*/
/*                       <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"*/
/*                              aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                           <span class="sr-only">20% Complete</span>*/
/*                         </div>*/
/*                       </div>*/
/*                     </a>*/
/*                   </li>*/
/*                   <!-- end task item -->*/
/*                   <li><!-- Task item -->*/
/*                     <a href="#">*/
/*                       <h3>*/
/*                         Create a nice theme*/
/*                         <small class="pull-right">40%</small>*/
/*                       </h3>*/
/*                       <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"*/
/*                              aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                           <span class="sr-only">40% Complete</span>*/
/*                         </div>*/
/*                       </div>*/
/*                     </a>*/
/*                   </li>*/
/*                   <!-- end task item -->*/
/*                   <li><!-- Task item -->*/
/*                     <a href="#">*/
/*                       <h3>*/
/*                         Some task I need to do*/
/*                         <small class="pull-right">60%</small>*/
/*                       </h3>*/
/*                       <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"*/
/*                              aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                           <span class="sr-only">60% Complete</span>*/
/*                         </div>*/
/*                       </div>*/
/*                     </a>*/
/*                   </li>*/
/*                   <!-- end task item -->*/
/*                   <li><!-- Task item -->*/
/*                     <a href="#">*/
/*                       <h3>*/
/*                         Make beautiful transitions*/
/*                         <small class="pull-right">80%</small>*/
/*                       </h3>*/
/*                       <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"*/
/*                              aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                           <span class="sr-only">80% Complete</span>*/
/*                         </div>*/
/*                       </div>*/
/*                     </a>*/
/*                   </li>*/
/*                   <!-- end task item -->*/
/*                 </ul>*/
/*               </li>*/
/*               <li class="footer">*/
/*                 <a href="#">View all tasks</a>*/
/*               </li>*/
/*             </ul>*/
/*           </li>*/
/*           <!-- User Account: style can be found in dropdown.less -->*/
/*           <li class="dropdown user user-menu">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*               <img src="{{ asset('bundles/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">*/
/*               <span class="hidden-xs">Alexander Pierce</span>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*               <!-- User image -->*/
/*               <li class="user-header">*/
/*                 <img src="{{ asset('bundles/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/* */
/*                 <p>*/
/*                   Alexander Pierce - Web Developer*/
/*                   <small>Member since Nov. 2012</small>*/
/*                 </p>*/
/*               </li>*/
/*               <!-- Menu Body -->*/
/*               <li class="user-body">*/
/*                 <div class="row">*/
/*                   <div class="col-xs-4 text-center">*/
/*                     <a href="#">Followers</a>*/
/*                   </div>*/
/*                   <div class="col-xs-4 text-center">*/
/*                     <a href="#">Sales</a>*/
/*                   </div>*/
/*                   <div class="col-xs-4 text-center">*/
/*                     <a href="#">Friends</a>*/
/*                   </div>*/
/*                 </div>*/
/*                 <!-- /.row -->*/
/*               </li>*/
/*               <!-- Menu Footer-->*/
/*               <li class="user-footer">*/
/*                 <div class="pull-left">*/
/*                   <a href="#" class="btn btn-default btn-flat">Profile</a>*/
/*                 </div>*/
/*                 <div class="pull-right">*/
/*                   <a href="#" class="btn btn-default btn-flat">Sign out</a>*/
/*                 </div>*/
/*               </li>*/
/*             </ul>*/
/*           </li>*/
/*           <!-- Control Sidebar Toggle Button -->*/
/*           <li>*/
/*             <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </nav>*/
/*   </header>*/
/*   <!-- Left side column. contains the logo and sidebar -->*/
/*   <aside class="main-sidebar">*/
/*     <!-- sidebar: style can be found in sidebar.less -->*/
/*     <section class="sidebar">*/
/*       <!-- Sidebar user panel -->*/
/*       <div class="user-panel">*/
/*         <div class="pull-left image">*/
/*           <img src="{{ asset('bundles/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*         </div>*/
/*         <div class="pull-left info">*/
/*           <p>Alexander Pierce</p>*/
/*           <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*         </div>*/
/*       </div>*/
/*       <!-- search form -->*/
/*       <form action="#" method="get" class="sidebar-form">*/
/*         <div class="input-group">*/
/*           <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*           <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>*/
/*                 </button>*/
/*               </span>*/
/*         </div>*/
/*       </form>*/
/*       <!-- /.search form -->*/
/*       <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*       <ul class="sidebar-menu" data-widget="tree">*/
/*         <li class="header">MAIN NAVIGATION</li>*/
/*         <li class="active treeview">*/
/*           <a href="#">*/
/*             <i class="fa fa-dashboard"></i> <span>Dashboard</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li class="active"><a href=""><i class="fa fa-circle-o"></i> Dashboard v1</a></li>*/
/*             <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li class="treeview">*/
/*           <a href="#">*/
/*             <i class="fa fa-files-o"></i>*/
/*             <span>Layout Options</span>*/
/*             <span class="pull-right-container">*/
/*               <span class="label label-primary pull-right">4</span>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="{{ asset('bundles/pages/layout/top-nav.html')}}"><i class="fa fa-circle-o"></i> Top Navigation</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/layout/boxed.html')}}"><i class="fa fa-circle-o"></i> Boxed</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/layout/fixed.html')}}"><i class="fa fa-circle-o"></i> Fixed</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/layout/collapsed-sidebar.html')}}"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li>*/
/*           <a href="{{ asset('bundles/pages/widgets.html')}}">*/
/*             <i class="fa fa-th"></i> <span>Widgets</span>*/
/*             <span class="pull-right-container">*/
/*               <small class="label pull-right bg-green">new</small>*/
/*             </span>*/
/*           </a>*/
/*         </li>*/
/*         <li class="treeview">*/
/*           <a href="#">*/
/*             <i class="fa fa-pie-chart"></i>*/
/*             <span>Charts</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="{{ asset('bundles/pages/charts/chartjs.html')}}"><i class="fa fa-circle-o"></i> ChartJS</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/charts/morris.html')}}"><i class="fa fa-circle-o"></i> Morris</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/charts/flot.html')}}"><i class="fa fa-circle-o"></i> Flot</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/charts/inline.html')}}"><i class="fa fa-circle-o"></i> Inline charts</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li class="treeview">*/
/*           <a href="#">*/
/*             <i class="fa fa-laptop"></i>*/
/*             <span>UI Elements</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="{{ asset('bundles/pages/UI/general.html')}}"><i class="fa fa-circle-o"></i> General</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/UI/icons.html')}}"><i class="fa fa-circle-o"></i> Icons</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/UI/buttons.html')}}"><i class="fa fa-circle-o"></i> Buttons</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/UI/sliders.html')}}"><i class="fa fa-circle-o"></i> Sliders</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/UI/timeline.html')}}"><i class="fa fa-circle-o"></i> Timeline</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/UI/modals.html')}}"><i class="fa fa-circle-o"></i> Modals</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li class="treeview">*/
/*           <a href="#">*/
/*             <i class="fa fa-edit"></i> <span>Forms</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="{{ asset('bundles/pages/forms/general.html')}}"><i class="fa fa-circle-o"></i> General Elements</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/forms/advanced.html')}}"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/forms/editors.html')}}"><i class="fa fa-circle-o"></i> Editors</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li class="treeview">*/
/*           <a href="#">*/
/*             <i class="fa fa-table"></i> <span>Tables</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="{{ asset('bundles/pages/tables/simple.html')}}"><i class="fa fa-circle-o"></i> Simple tables</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/tables/data.html')}}"><i class="fa fa-circle-o"></i> Data tables</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li>*/
/*           <a href="{{ asset('bundles/pages/calendar.html')}}">*/
/*             <i class="fa fa-calendar"></i> <span>Calendar</span>*/
/*             <span class="pull-right-container">*/
/*               <small class="label pull-right bg-red">3</small>*/
/*               <small class="label pull-right bg-blue">17</small>*/
/*             </span>*/
/*           </a>*/
/*         </li>*/
/*         <li>*/
/*           <a href="{{ asset('bundles/pages/mailbox/mailbox.html')}}">*/
/*             <i class="fa fa-envelope"></i> <span>Mailbox</span>*/
/*             <span class="pull-right-container">*/
/*               <small class="label pull-right bg-yellow">12</small>*/
/*               <small class="label pull-right bg-green">16</small>*/
/*               <small class="label pull-right bg-red">5</small>*/
/*             </span>*/
/*           </a>*/
/*         </li>*/
/*         <li class="treeview">*/
/*           <a href="#">*/
/*             <i class="fa fa-folder"></i> <span>Examples</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="{{ asset('bundles/pages/examples/invoice.html')}}"><i class="fa fa-circle-o"></i> Invoice</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/examples/profile.html')}}"><i class="fa fa-circle-o"></i> Profile</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/examples/login.html')}}"><i class="fa fa-circle-o"></i> Login</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/examples/register.html')}}"><i class="fa fa-circle-o"></i> Register</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/examples/lockscreen.html')}}"><i class="fa fa-circle-o"></i> Lockscreen</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/examples/404.html')}}"><i class="fa fa-circle-o"></i> 404 Error</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/examples/500.html')}}"><i class="fa fa-circle-o"></i> 500 Error</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/examples/blank.html')}}"><i class="fa fa-circle-o"></i> Blank Page</a></li>*/
/*             <li><a href="{{ asset('bundles/pages/examples/pace.html')}}"><i class="fa fa-circle-o"></i> Pace Page</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li class="treeview">*/
/*           <a href="#">*/
/*             <i class="fa fa-share"></i> <span>Multilevel</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>*/
/*             <li class="treeview">*/
/*               <a href="#"><i class="fa fa-circle-o"></i> Level One*/
/*                 <span class="pull-right-container">*/
/*                   <i class="fa fa-angle-left pull-right"></i>*/
/*                 </span>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>*/
/*                 <li class="treeview">*/
/*                   <a href="#"><i class="fa fa-circle-o"></i> Level Two*/
/*                     <span class="pull-right-container">*/
/*                       <i class="fa fa-angle-left pull-right"></i>*/
/*                     </span>*/
/*                   </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>*/
/*                     <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>*/
/*                   </ul>*/
/*                 </li>*/
/*               </ul>*/
/*             </li>*/
/*             <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>*/
/*         <li class="header">LABELS</li>*/
/*         <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>*/
/*         <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>*/
/*         <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>*/
/*       </ul>*/
/*     </section>*/
/*     <!-- /.sidebar -->*/
/*   </aside>*/
/*            <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*       <!-- Main content -->*/
/*       <section class="content">*/
/*         {% block content %}*/
/* */
/* */
/*         {% endblock %}*/
/*       </section>*/
/*       <!-- /.content -->*/
/*     </div>*/
/*     <!-- /.content-wrapper -->*/
/*  */
/*   <footer class="main-footer">*/
/*     <div class="pull-right hidden-xs">*/
/*       <b>Version</b> 2.4.0*/
/*     </div>*/
/*     <strong>Copyright &copy; 2019 <a href="https://www.dpsolutions.com.ar">DP Solutions</a>.</strong> All rights*/
/*     reserved.*/
/*   </footer>*/
/* */
/*   <!-- Control Sidebar -->*/
/*   <aside class="control-sidebar control-sidebar-dark">*/
/*     <!-- Create the tabs -->*/
/*     <ul class="nav nav-tabs nav-justified control-sidebar-tabs">*/
/*       <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>*/
/*       <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>*/
/*     </ul>*/
/*     <!-- Tab panes -->*/
/*     <div class="tab-content">*/
/*       <!-- Home tab content -->*/
/*       <div class="tab-pane" id="control-sidebar-home-tab">*/
/*         <h3 class="control-sidebar-heading">Recent Activity</h3>*/
/*         <ul class="control-sidebar-menu">*/
/*           <li>*/
/*             <a href="javascript:void(0)">*/
/*               <i class="menu-icon fa fa-birthday-cake bg-red"></i>*/
/* */
/*               <div class="menu-info">*/
/*                 <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>*/
/* */
/*                 <p>Will be 23 on April 24th</p>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript:void(0)">*/
/*               <i class="menu-icon fa fa-user bg-yellow"></i>*/
/* */
/*               <div class="menu-info">*/
/*                 <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>*/
/* */
/*                 <p>New phone +1(800)555-1234</p>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript:void(0)">*/
/*               <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>*/
/* */
/*               <div class="menu-info">*/
/*                 <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>*/
/* */
/*                 <p>nora@example.com</p>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript:void(0)">*/
/*               <i class="menu-icon fa fa-file-code-o bg-green"></i>*/
/* */
/*               <div class="menu-info">*/
/*                 <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>*/
/* */
/*                 <p>Execution time 5 seconds</p>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*         <!-- /.control-sidebar-menu -->*/
/* */
/*         <h3 class="control-sidebar-heading">Tasks Progress</h3>*/
/*         <ul class="control-sidebar-menu">*/
/*           <li>*/
/*             <a href="javascript:void(0)">*/
/*               <h4 class="control-sidebar-subheading">*/
/*                 Custom Template Design*/
/*                 <span class="label label-danger pull-right">70%</span>*/
/*               </h4>*/
/* */
/*               <div class="progress progress-xxs">*/
/*                 <div class="progress-bar progress-bar-danger" style="width: 70%"></div>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript:void(0)">*/
/*               <h4 class="control-sidebar-subheading">*/
/*                 Update Resume*/
/*                 <span class="label label-success pull-right">95%</span>*/
/*               </h4>*/
/* */
/*               <div class="progress progress-xxs">*/
/*                 <div class="progress-bar progress-bar-success" style="width: 95%"></div>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript:void(0)">*/
/*               <h4 class="control-sidebar-subheading">*/
/*                 Laravel Integration*/
/*                 <span class="label label-warning pull-right">50%</span>*/
/*               </h4>*/
/* */
/*               <div class="progress progress-xxs">*/
/*                 <div class="progress-bar progress-bar-warning" style="width: 50%"></div>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript:void(0)">*/
/*               <h4 class="control-sidebar-subheading">*/
/*                 Back End Framework*/
/*                 <span class="label label-primary pull-right">68%</span>*/
/*               </h4>*/
/* */
/*               <div class="progress progress-xxs">*/
/*                 <div class="progress-bar progress-bar-primary" style="width: 68%"></div>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*         <!-- /.control-sidebar-menu -->*/
/* */
/*       </div>*/
/*       <!-- /.tab-pane -->*/
/*       <!-- Stats tab content -->*/
/*       <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>*/
/*       <!-- /.tab-pane -->*/
/*       <!-- Settings tab content -->*/
/*       <div class="tab-pane" id="control-sidebar-settings-tab">*/
/*         <form method="post">*/
/*           <h3 class="control-sidebar-heading">General Settings</h3>*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Report panel usage*/
/*               <input type="checkbox" class="pull-right" checked>*/
/*             </label>*/
/* */
/*             <p>*/
/*               Some information about this general settings option*/
/*             </p>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Allow mail redirect*/
/*               <input type="checkbox" class="pull-right" checked>*/
/*             </label>*/
/* */
/*             <p>*/
/*               Other sets of options are available*/
/*             </p>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Expose author name in posts*/
/*               <input type="checkbox" class="pull-right" checked>*/
/*             </label>*/
/* */
/*             <p>*/
/*               Allow the user to show his name in blog posts*/
/*             </p>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/* */
/*           <h3 class="control-sidebar-heading">Chat Settings</h3>*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Show me as online*/
/*               <input type="checkbox" class="pull-right" checked>*/
/*             </label>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Turn off notifications*/
/*               <input type="checkbox" class="pull-right">*/
/*             </label>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Delete chat history*/
/*               <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>*/
/*             </label>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/*         </form>*/
/*       </div>*/
/*       <!-- /.tab-pane -->*/
/*     </div>*/
/*   </aside>*/
/*   <!-- /.control-sidebar -->*/
/*   <!-- Add the sidebar's background. This div must be placed*/
/*        immediately after the control sidebar -->*/
/*   <div class="control-sidebar-bg"></div>*/
/* </div>*/
/* <!-- ./wrapper -->*/
/* {%  block scripts %}*/
/*     */
/*     <!-- jQuery 3 -->*/
/*     <script src="{{ asset('bundles/bower_components/jquery/dist/jquery.min.js')}}"></script>*/
/*     <!-- jQuery UI 1.11.4 -->*/
/*     <script src="{{ asset('bundles/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>*/
/*     <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->*/
/*     <script>*/
/*       $.widget.bridge('uibutton', $.ui.button);*/
/*     </script>*/
/*     <!-- Bootstrap 3.3.7 -->*/
/*     <script src="{{ asset('bundles/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*     <!-- Morris.js charts -->*/
/*     <script src="{{ asset('bundles/bower_components/raphael/raphael.min.js')}}"></script>*/
/*     <script src="{{ asset('bundles/bower_components/morris.js/morris.min.js')}}"></script>*/
/*     <!-- Sparkline -->*/
/*     <script src="{{ asset('bundles/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>*/
/*     <!-- jvectormap -->*/
/*     <script src="{{ asset('bundles/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>*/
/*     <script src="{{ asset('bundles/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>*/
/*     <!-- jQuery Knob Chart -->*/
/*     <script src="{{ asset('bundles/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>*/
/*     <!-- daterangepicker -->*/
/*     <script src="{{ asset('bundles/bower_components/moment/min/moment.min.js')}}"></script>*/
/*     <script src="{{ asset('bundles/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>*/
/*     <!-- datepicker -->*/
/*     <script src="{{ asset('bundles/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>*/
/*     <!-- Bootstrap WYSIHTML5 -->*/
/*     <script src="{{ asset('bundles/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>*/
/*     <!-- Slimscroll -->*/
/*     <script src="{{ asset('bundles/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{ asset('bundles/bower_components/fastclick/lib/fastclick.js')}}"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{ asset('bundles/dist/js/adminlte.min.js')}}"></script>*/
/*     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->*/
/*     <script src="{{ asset('bundles/dist/js/pages/dashboard.js')}}"></script>*/
/*     <!-- AdminLTE for demo purposes -->*/
/*     <script src="{{ asset('bundles/dist/js/demo.js')}}"></script>*/
/*     */
/* */
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
