<?php

/* MiBundle:Default:index.html.twig */
class __TwigTemplate_a37077f118e38b360762b157188c39858c1d5e7b13f1b2451713284e7917246e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiBundle::templateApp.html.twig", "MiBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiBundle::templateApp.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c43f6e41a0f8eca29b4d9bf8e4ccf6a8491a748ed2fd07015a4ae7c9b2a2fc90 = $this->env->getExtension("native_profiler");
        $__internal_c43f6e41a0f8eca29b4d9bf8e4ccf6a8491a748ed2fd07015a4ae7c9b2a2fc90->enter($__internal_c43f6e41a0f8eca29b4d9bf8e4ccf6a8491a748ed2fd07015a4ae7c9b2a2fc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c43f6e41a0f8eca29b4d9bf8e4ccf6a8491a748ed2fd07015a4ae7c9b2a2fc90->leave($__internal_c43f6e41a0f8eca29b4d9bf8e4ccf6a8491a748ed2fd07015a4ae7c9b2a2fc90_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        $__internal_ce33a5eff7efb690cc5e85d76470222ee73a4a441207e405bae0c4f180f03574 = $this->env->getExtension("native_profiler");
        $__internal_ce33a5eff7efb690cc5e85d76470222ee73a4a441207e405bae0c4f180f03574->enter($__internal_ce33a5eff7efb690cc5e85d76470222ee73a4a441207e405bae0c4f180f03574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 4
        echo "  ";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
";
        
        $__internal_ce33a5eff7efb690cc5e85d76470222ee73a4a441207e405bae0c4f180f03574->leave($__internal_ce33a5eff7efb690cc5e85d76470222ee73a4a441207e405bae0c4f180f03574_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_55b9c667ae929dce0a4982de42c999cdc1462cd56bcd7e96a146a84218b23c70 = $this->env->getExtension("native_profiler");
        $__internal_55b9c667ae929dce0a4982de42c999cdc1462cd56bcd7e96a146a84218b23c70->enter($__internal_55b9c667ae929dce0a4982de42c999cdc1462cd56bcd7e96a146a84218b23c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "      <!--RESUMEN DASHBOARD -->
         <!-- Small boxes (Stat box) -->
        <div class=\"row\">
          <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-aqua\">
              <div class=\"inner\">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-bag\"></i>
              </div>
              <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-green\">
              <div class=\"inner\">
                <h3>53<sup style=\"font-size: 20px\">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-stats-bars\"></i>
              </div>
              <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-yellow\">
              <div class=\"inner\">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-person-add\"></i>
              </div>
              <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-red\">
              <div class=\"inner\">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row 


      <!-- interactive chart -->

      <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
          <i class=\"fa fa-bar-chart-o\"></i>

          <h3 class=\"box-title\">Interactive Area Chart</h3>

          <div class=\"box-tools pull-right\">
            Real time
            <div class=\"btn-group\" id=\"realtime\" data-toggle=\"btn-toggle\">
              <button type=\"button\" class=\"btn btn-default btn-xs active\" data-toggle=\"on\">On</button>
              <button type=\"button\" class=\"btn btn-default btn-xs\" data-toggle=\"off\">Off</button>
            </div>
          </div>
        </div>
        <div class=\"box-body\">
          <div id=\"interactive\" style=\"height: 300px;\"></div>
        </div>
        <!-- /.box-body-->
                <!-- Main row -->
        <div class=\"row\">
          <!-- Left col -->
          <section class=\"col-lg-7 connectedSortable\">
            <!-- Custom tabs (Charts with tabs)-->
            <div class=\"nav-tabs-custom\">
              <!-- Tabs within a box -->
              <ul class=\"nav nav-tabs pull-right\">
                <li class=\"active\"><a href=\"#revenue-chart\" data-toggle=\"tab\">Area</a></li>
                <li><a href=\"#sales-chart\" data-toggle=\"tab\">Donut</a></li>
                <li class=\"pull-left header\"><i class=\"fa fa-inbox\"></i> Sales</li>
              </ul>
              <div class=\"tab-content no-padding\">
                <!-- Morris chart - Sales -->
                <div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\"></div>
                <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\"></div>
              </div>
            </div>
            <!-- /.nav-tabs-custom -->





            <!-- quick email widget -->
            <div class=\"box box-info\">
              <div class=\"box-header\">
                <i class=\"fa fa-envelope\"></i>

                <h3 class=\"box-title\">Quick Email</h3>
                <!-- tools box -->
                <div class=\"pull-right box-tools\">
                  <button type=\"button\" class=\"btn btn-info btn-sm\" data-widget=\"remove\" data-toggle=\"tooltip\"
                          title=\"Remove\">
                    <i class=\"fa fa-times\"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class=\"box-body\">
                <form action=\"#\" method=\"post\">
                  <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" name=\"emailto\" placeholder=\"Email to:\">
                  </div>
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\">
                  </div>
                  <div>
                    <textarea class=\"textarea\" placeholder=\"Message\"
                              style=\"width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;\"></textarea>
                  </div>
                </form>
              </div>
              <div class=\"box-footer clearfix\">
                <button type=\"button\" class=\"pull-right btn btn-default\" id=\"sendEmail\">Send
                  <i class=\"fa fa-arrow-circle-right\"></i></button>
              </div>
            </div>

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class=\"col-lg-5 connectedSortable\">

            <!-- Map box -->
            <div class=\"box box-solid bg-light-blue-gradient\">
              <div class=\"box-header\">
                <!-- tools box -->
                <div class=\"pull-right box-tools\">
                  <button type=\"button\" class=\"btn btn-primary btn-sm daterange pull-right\" data-toggle=\"tooltip\"
                          title=\"Date range\">
                    <i class=\"fa fa-calendar\"></i></button>
                  <button type=\"button\" class=\"btn btn-primary btn-sm pull-right\" data-widget=\"collapse\"
                          data-toggle=\"tooltip\" title=\"Collapse\" style=\"margin-right: 5px;\">
                    <i class=\"fa fa-minus\"></i></button>
                </div>
                <!-- /. tools -->

                <i class=\"fa fa-map-marker\"></i>

                <h3 class=\"box-title\">
                  Visitors
                </h3>
              </div>
              <div class=\"box-body\">
                <div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
              </div>
              <!-- /.box-body-->
              <div class=\"box-footer no-border\">
                <div class=\"row\">
                  <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                    <div id=\"sparkline-1\"></div>
                    <div class=\"knob-label\">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                    <div id=\"sparkline-2\"></div>
                    <div class=\"knob-label\">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class=\"col-xs-4 text-center\">
                    <div id=\"sparkline-3\"></div>
                    <div class=\"knob-label\">Exists</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.box -->

            <!-- solid sales graph -->
            <div class=\"box box-solid bg-teal-gradient\">
              <div class=\"box-header\">
                <i class=\"fa fa-th\"></i>

                <h3 class=\"box-title\">Sales Graph</h3>

                <div class=\"box-tools pull-right\">
                  <button type=\"button\" class=\"btn bg-teal btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                  </button>
                  <button type=\"button\" class=\"btn bg-teal btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i>
                  </button>
                </div>
              </div>
              <div class=\"box-body border-radius-none\">
                <div class=\"chart\" id=\"line-chart\" style=\"height: 250px;\"></div>
              </div>
              <!-- /.box-body -->
              <div class=\"box-footer no-border\">
                <div class=\"row\">
                  <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                    <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\"
                           data-fgColor=\"#39CCCC\">

                    <div class=\"knob-label\">Mail-Orders</div>
                  </div>
                  <!-- ./col -->
                  <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                    <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\"
                           data-fgColor=\"#39CCCC\">

                    <div class=\"knob-label\">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class=\"col-xs-4 text-center\">
                    <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\"
                           data-fgColor=\"#39CCCC\">

                    <div class=\"knob-label\">In-Store</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.box -->

            <!-- Calendar -->
            <div class=\"box box-solid bg-green-gradient\">
              <div class=\"box-header\">
                <i class=\"fa fa-calendar\"></i>

                <h3 class=\"box-title\">Calendar</h3>
                <!-- tools box -->
                <div class=\"pull-right box-tools\">
                  <!-- button with a dropdown -->
                  <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                      <i class=\"fa fa-bars\"></i></button>
                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                      <li><a href=\"#\">Add new event</a></li>
                      <li><a href=\"#\">Clear events</a></li>
                      <li class=\"divider\"></li>
                      <li><a href=\"#\">View calendar</a></li>
                    </ul>
                  </div>
                  <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                  </button>
                  <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-header -->
              <div class=\"box-body no-padding\">
                <!--The calendar -->
                <div id=\"calendar\" style=\"width: 100%\"></div>
              </div>
              <!-- /.box-body -->

                <!-- /.row -->
              </div>
            </div>
            <!-- /.box -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div>
    <!-- /.box -->
     ";
        
        $__internal_55b9c667ae929dce0a4982de42c999cdc1462cd56bcd7e96a146a84218b23c70->leave($__internal_55b9c667ae929dce0a4982de42c999cdc1462cd56bcd7e96a146a84218b23c70_prof);

    }

    // line 300
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_e58463d4c6db472d389912f3fc9393fdeee6be6994c0141f9992e8e8069fd603 = $this->env->getExtension("native_profiler");
        $__internal_e58463d4c6db472d389912f3fc9393fdeee6be6994c0141f9992e8e8069fd603->enter($__internal_e58463d4c6db472d389912f3fc9393fdeee6be6994c0141f9992e8e8069fd603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 301
        echo "      ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
        <!-- FLOT CHARTS -->
        <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
        <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
        <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
        <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bower_components/Flot/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
        <!-- Page specific script -->
      <script>
        \$(function () {
        /*
         * Flot Interactive Chart
         * -----------------------
         */
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [], totalPoints = 100

        function getRandomData() {

          if (data.length > 0)
            data = data.slice(1)

          // Do a random walk
          while (data.length < totalPoints) {

            var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

            if (y < 0) {
              y = 0
            } else if (y > 100) {
              y = 100
            }

            data.push(y)
          }

          // Zip the generated y values with the x values
          var res = []
          for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]])
          }

          return res
        }

        var interactive_plot = \$.plot('#interactive', [getRandomData()], {
          grid  : {
            borderColor: '#f3f3f3',
            borderWidth: 1,
            tickColor  : '#f3f3f3'
          },
          series: {
            shadowSize: 0, // Drawing is faster without shadows
            color     : '#3c8dbc'
          },
          lines : {
            fill : true, //Converts the line chart to area chart
            color: '#3c8dbc'
          },
          yaxis : {
            min : 0,
            max : 100,
            show: true
          },
          xaxis : {
            show: true
          }
        })

        var updateInterval = 500 //Fetch data ever x milliseconds
        var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
        function update() {

          interactive_plot.setData([getRandomData()])

          // Since the axes don't change, we don't need to call plot.setupGrid()
          interactive_plot.draw()
          if (realtime === 'on')
            setTimeout(update, updateInterval)
        }

        //INITIALIZE REALTIME DATA FETCHING
        if (realtime === 'on') {
          update()
        }
        //REALTIME TOGGLE
        \$('#realtime .btn').click(function () {
          if (\$(this).data('toggle') === 'on') {
            realtime = 'on'
          }
          else {
            realtime = 'off'
          }
          update()
        })
        /*
         * END INTERACTIVE CHART
         */

        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var sin = [], cos = []
        for (var i = 0; i < 14; i += 0.5) {
          sin.push([i, Math.sin(i)])
          cos.push([i, Math.cos(i)])
        }
        var line_data1 = {
          data : sin,
          color: '#3c8dbc'
        }
        var line_data2 = {
          data : cos,
          color: '#00c0ef'
        }
        \$.plot('#line-chart', [line_data1, line_data2], {
          grid  : {
            hoverable  : true,
            borderColor: '#f3f3f3',
            borderWidth: 1,
            tickColor  : '#f3f3f3'
          },
          series: {
            shadowSize: 0,
            lines     : {
              show: true
            },
            points    : {
              show: true
            }
          },
          lines : {
            fill : false,
            color: ['#3c8dbc', '#f56954']
          },
          yaxis : {
            show: true
          },
          xaxis : {
            show: true
          }
        })
        //Initialize tooltip on hover
        \$('<div class=\"tooltip-inner\" id=\"line-chart-tooltip\"></div>').css({
          position: 'absolute',
          display : 'none',
          opacity : 0.8
        }).appendTo('body')
        \$('#line-chart').bind('plothover', function (event, pos, item) {

          if (item) {
            var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

            \$('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
            .css({ top: item.pageY + 5, left: item.pageX + 5 })
            .fadeIn(200)
          } else {
            \$('#line-chart-tooltip').hide()
          }

        })
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
         var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
         [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
         [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
         \$.plot('#area-chart', [areaData], {
          grid  : {
            borderWidth: 0
          },
          series: {
            shadowSize: 0, // Drawing is faster without shadows
            color     : '#00c0ef'
          },
          lines : {
            fill: true //Converts the line chart to area chart
          },
          yaxis : {
            show: false
          },
          xaxis : {
            show: false
          }
        })

         /* END AREA CHART */

        /*
         * BAR CHART
         * ---------
         */

         var bar_data = {
          data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
          color: '#3c8dbc'
        }
        \$.plot('#bar-chart', [bar_data], {
          grid  : {
            borderWidth: 1,
            borderColor: '#f3f3f3',
            tickColor  : '#f3f3f3'
          },
          series: {
            bars: {
              show    : true,
              barWidth: 0.5,
              align   : 'center'
            }
          },
          xaxis : {
            mode      : 'categories',
            tickLength: 0
          }
        })
        /* END BAR CHART */

        /*
         * DONUT CHART
         * -----------
         */

         var donutData = [
         { label: 'Series2', data: 30, color: '#3c8dbc' },
         { label: 'Series3', data: 20, color: '#0073b7' },
         { label: 'Series4', data: 50, color: '#00c0ef' }
         ]
         \$.plot('#donut-chart', donutData, {
          series: {
            pie: {
              show       : true,
              radius     : 1,
              innerRadius: 0.5,
              label      : {
                show     : true,
                radius   : 2 / 3,
                formatter: labelFormatter,
                threshold: 0.1
              }

            }
          },
          legend: {
            show: false
          }
        })
        /*
         * END DONUT CHART
         */

       })

      /*
       * Custom Label formatter
       * ----------------------
       */
       function labelFormatter(label, series) {
        return '<div style=\"font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;\">'
        + label
        + '<br>'
        + Math.round(series.percent) + '%</div>'
      }
      
    </script>

    ";
        
        $__internal_e58463d4c6db472d389912f3fc9393fdeee6be6994c0141f9992e8e8069fd603->leave($__internal_e58463d4c6db472d389912f3fc9393fdeee6be6994c0141f9992e8e8069fd603_prof);

    }

    public function getTemplateName()
    {
        return "MiBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 309,  376 => 307,  371 => 305,  366 => 303,  360 => 301,  354 => 300,  58 => 10,  52 => 9,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "MiBundle::templateApp.html.twig" %}*/
/* */
/* {% block styles %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block content %}*/
/*       <!--RESUMEN DASHBOARD -->*/
/*          <!-- Small boxes (Stat box) -->*/
/*         <div class="row">*/
/*           <div class="col-lg-3 col-xs-6">*/
/*             <!-- small box -->*/
/*             <div class="small-box bg-aqua">*/
/*               <div class="inner">*/
/*                 <h3>150</h3>*/
/* */
/*                 <p>New Orders</p>*/
/*               </div>*/
/*               <div class="icon">*/
/*                 <i class="ion ion-bag"></i>*/
/*               </div>*/
/*               <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*             </div>*/
/*           </div>*/
/*           <!-- ./col -->*/
/*           <div class="col-lg-3 col-xs-6">*/
/*             <!-- small box -->*/
/*             <div class="small-box bg-green">*/
/*               <div class="inner">*/
/*                 <h3>53<sup style="font-size: 20px">%</sup></h3>*/
/* */
/*                 <p>Bounce Rate</p>*/
/*               </div>*/
/*               <div class="icon">*/
/*                 <i class="ion ion-stats-bars"></i>*/
/*               </div>*/
/*               <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*             </div>*/
/*           </div>*/
/*           <!-- ./col -->*/
/*           <div class="col-lg-3 col-xs-6">*/
/*             <!-- small box -->*/
/*             <div class="small-box bg-yellow">*/
/*               <div class="inner">*/
/*                 <h3>44</h3>*/
/* */
/*                 <p>User Registrations</p>*/
/*               </div>*/
/*               <div class="icon">*/
/*                 <i class="ion ion-person-add"></i>*/
/*               </div>*/
/*               <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*             </div>*/
/*           </div>*/
/*           <!-- ./col -->*/
/*           <div class="col-lg-3 col-xs-6">*/
/*             <!-- small box -->*/
/*             <div class="small-box bg-red">*/
/*               <div class="inner">*/
/*                 <h3>65</h3>*/
/* */
/*                 <p>Unique Visitors</p>*/
/*               </div>*/
/*               <div class="icon">*/
/*                 <i class="ion ion-pie-graph"></i>*/
/*               </div>*/
/*               <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*             </div>*/
/*           </div>*/
/*           <!-- ./col -->*/
/*         </div>*/
/*         <!-- /.row */
/* */
/* */
/*       <!-- interactive chart -->*/
/* */
/*       <div class="box box-primary">*/
/*         <div class="box-header with-border">*/
/*           <i class="fa fa-bar-chart-o"></i>*/
/* */
/*           <h3 class="box-title">Interactive Area Chart</h3>*/
/* */
/*           <div class="box-tools pull-right">*/
/*             Real time*/
/*             <div class="btn-group" id="realtime" data-toggle="btn-toggle">*/
/*               <button type="button" class="btn btn-default btn-xs active" data-toggle="on">On</button>*/
/*               <button type="button" class="btn btn-default btn-xs" data-toggle="off">Off</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="box-body">*/
/*           <div id="interactive" style="height: 300px;"></div>*/
/*         </div>*/
/*         <!-- /.box-body-->*/
/*                 <!-- Main row -->*/
/*         <div class="row">*/
/*           <!-- Left col -->*/
/*           <section class="col-lg-7 connectedSortable">*/
/*             <!-- Custom tabs (Charts with tabs)-->*/
/*             <div class="nav-tabs-custom">*/
/*               <!-- Tabs within a box -->*/
/*               <ul class="nav nav-tabs pull-right">*/
/*                 <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>*/
/*                 <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>*/
/*                 <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>*/
/*               </ul>*/
/*               <div class="tab-content no-padding">*/
/*                 <!-- Morris chart - Sales -->*/
/*                 <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>*/
/*                 <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>*/
/*               </div>*/
/*             </div>*/
/*             <!-- /.nav-tabs-custom -->*/
/* */
/* */
/* */
/* */
/* */
/*             <!-- quick email widget -->*/
/*             <div class="box box-info">*/
/*               <div class="box-header">*/
/*                 <i class="fa fa-envelope"></i>*/
/* */
/*                 <h3 class="box-title">Quick Email</h3>*/
/*                 <!-- tools box -->*/
/*                 <div class="pull-right box-tools">*/
/*                   <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"*/
/*                           title="Remove">*/
/*                     <i class="fa fa-times"></i></button>*/
/*                 </div>*/
/*                 <!-- /. tools -->*/
/*               </div>*/
/*               <div class="box-body">*/
/*                 <form action="#" method="post">*/
/*                   <div class="form-group">*/
/*                     <input type="email" class="form-control" name="emailto" placeholder="Email to:">*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <input type="text" class="form-control" name="subject" placeholder="Subject">*/
/*                   </div>*/
/*                   <div>*/
/*                     <textarea class="textarea" placeholder="Message"*/
/*                               style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>*/
/*                   </div>*/
/*                 </form>*/
/*               </div>*/
/*               <div class="box-footer clearfix">*/
/*                 <button type="button" class="pull-right btn btn-default" id="sendEmail">Send*/
/*                   <i class="fa fa-arrow-circle-right"></i></button>*/
/*               </div>*/
/*             </div>*/
/* */
/*           </section>*/
/*           <!-- /.Left col -->*/
/*           <!-- right col (We are only adding the ID to make the widgets sortable)-->*/
/*           <section class="col-lg-5 connectedSortable">*/
/* */
/*             <!-- Map box -->*/
/*             <div class="box box-solid bg-light-blue-gradient">*/
/*               <div class="box-header">*/
/*                 <!-- tools box -->*/
/*                 <div class="pull-right box-tools">*/
/*                   <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"*/
/*                           title="Date range">*/
/*                     <i class="fa fa-calendar"></i></button>*/
/*                   <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"*/
/*                           data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">*/
/*                     <i class="fa fa-minus"></i></button>*/
/*                 </div>*/
/*                 <!-- /. tools -->*/
/* */
/*                 <i class="fa fa-map-marker"></i>*/
/* */
/*                 <h3 class="box-title">*/
/*                   Visitors*/
/*                 </h3>*/
/*               </div>*/
/*               <div class="box-body">*/
/*                 <div id="world-map" style="height: 250px; width: 100%;"></div>*/
/*               </div>*/
/*               <!-- /.box-body-->*/
/*               <div class="box-footer no-border">*/
/*                 <div class="row">*/
/*                   <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                     <div id="sparkline-1"></div>*/
/*                     <div class="knob-label">Visitors</div>*/
/*                   </div>*/
/*                   <!-- ./col -->*/
/*                   <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                     <div id="sparkline-2"></div>*/
/*                     <div class="knob-label">Online</div>*/
/*                   </div>*/
/*                   <!-- ./col -->*/
/*                   <div class="col-xs-4 text-center">*/
/*                     <div id="sparkline-3"></div>*/
/*                     <div class="knob-label">Exists</div>*/
/*                   </div>*/
/*                   <!-- ./col -->*/
/*                 </div>*/
/*                 <!-- /.row -->*/
/*               </div>*/
/*             </div>*/
/*             <!-- /.box -->*/
/* */
/*             <!-- solid sales graph -->*/
/*             <div class="box box-solid bg-teal-gradient">*/
/*               <div class="box-header">*/
/*                 <i class="fa fa-th"></i>*/
/* */
/*                 <h3 class="box-title">Sales Graph</h3>*/
/* */
/*                 <div class="box-tools pull-right">*/
/*                   <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*                   </button>*/
/*                   <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>*/
/*                   </button>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="box-body border-radius-none">*/
/*                 <div class="chart" id="line-chart" style="height: 250px;"></div>*/
/*               </div>*/
/*               <!-- /.box-body -->*/
/*               <div class="box-footer no-border">*/
/*                 <div class="row">*/
/*                   <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                     <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"*/
/*                            data-fgColor="#39CCCC">*/
/* */
/*                     <div class="knob-label">Mail-Orders</div>*/
/*                   </div>*/
/*                   <!-- ./col -->*/
/*                   <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                     <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"*/
/*                            data-fgColor="#39CCCC">*/
/* */
/*                     <div class="knob-label">Online</div>*/
/*                   </div>*/
/*                   <!-- ./col -->*/
/*                   <div class="col-xs-4 text-center">*/
/*                     <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"*/
/*                            data-fgColor="#39CCCC">*/
/* */
/*                     <div class="knob-label">In-Store</div>*/
/*                   </div>*/
/*                   <!-- ./col -->*/
/*                 </div>*/
/*                 <!-- /.row -->*/
/*               </div>*/
/*               <!-- /.box-footer -->*/
/*             </div>*/
/*             <!-- /.box -->*/
/* */
/*             <!-- Calendar -->*/
/*             <div class="box box-solid bg-green-gradient">*/
/*               <div class="box-header">*/
/*                 <i class="fa fa-calendar"></i>*/
/* */
/*                 <h3 class="box-title">Calendar</h3>*/
/*                 <!-- tools box -->*/
/*                 <div class="pull-right box-tools">*/
/*                   <!-- button with a dropdown -->*/
/*                   <div class="btn-group">*/
/*                     <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*                       <i class="fa fa-bars"></i></button>*/
/*                     <ul class="dropdown-menu pull-right" role="menu">*/
/*                       <li><a href="#">Add new event</a></li>*/
/*                       <li><a href="#">Clear events</a></li>*/
/*                       <li class="divider"></li>*/
/*                       <li><a href="#">View calendar</a></li>*/
/*                     </ul>*/
/*                   </div>*/
/*                   <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*                   </button>*/
/*                   <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>*/
/*                   </button>*/
/*                 </div>*/
/*                 <!-- /. tools -->*/
/*               </div>*/
/*               <!-- /.box-header -->*/
/*               <div class="box-body no-padding">*/
/*                 <!--The calendar -->*/
/*                 <div id="calendar" style="width: 100%"></div>*/
/*               </div>*/
/*               <!-- /.box-body -->*/
/* */
/*                 <!-- /.row -->*/
/*               </div>*/
/*             </div>*/
/*             <!-- /.box -->*/
/* */
/*           </section>*/
/*           <!-- right col -->*/
/*         </div>*/
/*         <!-- /.row (main row) -->*/
/*       </div>*/
/*     <!-- /.box -->*/
/*      {% endblock %}    */
/*     {% block scripts %}*/
/*       {{ parent() }}*/
/*         <!-- FLOT CHARTS -->*/
/*         <script src="{{ asset('bundles/bower_components/Flot/jquery.flot.js')}}"></script>*/
/*         <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->*/
/*         <script src="{{ asset('bundles/bower_components/Flot/jquery.flot.resize.js')}}"></script>*/
/*         <!-- FLOT PIE PLUGIN - also used to draw donut charts -->*/
/*         <script src="{{ asset('bundles/bower_components/Flot/jquery.flot.pie.js')}}"></script>*/
/*         <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->*/
/*         <script src="{{ asset('bundles/bower_components/Flot/jquery.flot.categories.js')}}"></script>*/
/*         <!-- Page specific script -->*/
/*       <script>*/
/*         $(function () {*/
/*         /**/
/*          * Flot Interactive Chart*/
/*          * -----------------------*/
/*          *//* */
/*         // We use an inline data source in the example, usually data would*/
/*         // be fetched from a server*/
/*         var data = [], totalPoints = 100*/
/* */
/*         function getRandomData() {*/
/* */
/*           if (data.length > 0)*/
/*             data = data.slice(1)*/
/* */
/*           // Do a random walk*/
/*           while (data.length < totalPoints) {*/
/* */
/*             var prev = data.length > 0 ? data[data.length - 1] : 50,*/
/*             y    = prev + Math.random() * 10 - 5*/
/* */
/*             if (y < 0) {*/
/*               y = 0*/
/*             } else if (y > 100) {*/
/*               y = 100*/
/*             }*/
/* */
/*             data.push(y)*/
/*           }*/
/* */
/*           // Zip the generated y values with the x values*/
/*           var res = []*/
/*           for (var i = 0; i < data.length; ++i) {*/
/*             res.push([i, data[i]])*/
/*           }*/
/* */
/*           return res*/
/*         }*/
/* */
/*         var interactive_plot = $.plot('#interactive', [getRandomData()], {*/
/*           grid  : {*/
/*             borderColor: '#f3f3f3',*/
/*             borderWidth: 1,*/
/*             tickColor  : '#f3f3f3'*/
/*           },*/
/*           series: {*/
/*             shadowSize: 0, // Drawing is faster without shadows*/
/*             color     : '#3c8dbc'*/
/*           },*/
/*           lines : {*/
/*             fill : true, //Converts the line chart to area chart*/
/*             color: '#3c8dbc'*/
/*           },*/
/*           yaxis : {*/
/*             min : 0,*/
/*             max : 100,*/
/*             show: true*/
/*           },*/
/*           xaxis : {*/
/*             show: true*/
/*           }*/
/*         })*/
/* */
/*         var updateInterval = 500 //Fetch data ever x milliseconds*/
/*         var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching*/
/*         function update() {*/
/* */
/*           interactive_plot.setData([getRandomData()])*/
/* */
/*           // Since the axes don't change, we don't need to call plot.setupGrid()*/
/*           interactive_plot.draw()*/
/*           if (realtime === 'on')*/
/*             setTimeout(update, updateInterval)*/
/*         }*/
/* */
/*         //INITIALIZE REALTIME DATA FETCHING*/
/*         if (realtime === 'on') {*/
/*           update()*/
/*         }*/
/*         //REALTIME TOGGLE*/
/*         $('#realtime .btn').click(function () {*/
/*           if ($(this).data('toggle') === 'on') {*/
/*             realtime = 'on'*/
/*           }*/
/*           else {*/
/*             realtime = 'off'*/
/*           }*/
/*           update()*/
/*         })*/
/*         /**/
/*          * END INTERACTIVE CHART*/
/*          *//* */
/* */
/*         /**/
/*          * LINE CHART*/
/*          * ----------*/
/*          *//* */
/*         //LINE randomly generated data*/
/* */
/*         var sin = [], cos = []*/
/*         for (var i = 0; i < 14; i += 0.5) {*/
/*           sin.push([i, Math.sin(i)])*/
/*           cos.push([i, Math.cos(i)])*/
/*         }*/
/*         var line_data1 = {*/
/*           data : sin,*/
/*           color: '#3c8dbc'*/
/*         }*/
/*         var line_data2 = {*/
/*           data : cos,*/
/*           color: '#00c0ef'*/
/*         }*/
/*         $.plot('#line-chart', [line_data1, line_data2], {*/
/*           grid  : {*/
/*             hoverable  : true,*/
/*             borderColor: '#f3f3f3',*/
/*             borderWidth: 1,*/
/*             tickColor  : '#f3f3f3'*/
/*           },*/
/*           series: {*/
/*             shadowSize: 0,*/
/*             lines     : {*/
/*               show: true*/
/*             },*/
/*             points    : {*/
/*               show: true*/
/*             }*/
/*           },*/
/*           lines : {*/
/*             fill : false,*/
/*             color: ['#3c8dbc', '#f56954']*/
/*           },*/
/*           yaxis : {*/
/*             show: true*/
/*           },*/
/*           xaxis : {*/
/*             show: true*/
/*           }*/
/*         })*/
/*         //Initialize tooltip on hover*/
/*         $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({*/
/*           position: 'absolute',*/
/*           display : 'none',*/
/*           opacity : 0.8*/
/*         }).appendTo('body')*/
/*         $('#line-chart').bind('plothover', function (event, pos, item) {*/
/* */
/*           if (item) {*/
/*             var x = item.datapoint[0].toFixed(2),*/
/*             y = item.datapoint[1].toFixed(2)*/
/* */
/*             $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)*/
/*             .css({ top: item.pageY + 5, left: item.pageX + 5 })*/
/*             .fadeIn(200)*/
/*           } else {*/
/*             $('#line-chart-tooltip').hide()*/
/*           }*/
/* */
/*         })*/
/*         /* END LINE CHART *//* */
/* */
/*         /**/
/*          * FULL WIDTH STATIC AREA CHART*/
/*          * -----------------*/
/*          *//* */
/*          var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],*/
/*          [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],*/
/*          [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]*/
/*          $.plot('#area-chart', [areaData], {*/
/*           grid  : {*/
/*             borderWidth: 0*/
/*           },*/
/*           series: {*/
/*             shadowSize: 0, // Drawing is faster without shadows*/
/*             color     : '#00c0ef'*/
/*           },*/
/*           lines : {*/
/*             fill: true //Converts the line chart to area chart*/
/*           },*/
/*           yaxis : {*/
/*             show: false*/
/*           },*/
/*           xaxis : {*/
/*             show: false*/
/*           }*/
/*         })*/
/* */
/*          /* END AREA CHART *//* */
/* */
/*         /**/
/*          * BAR CHART*/
/*          * ---------*/
/*          *//* */
/* */
/*          var bar_data = {*/
/*           data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],*/
/*           color: '#3c8dbc'*/
/*         }*/
/*         $.plot('#bar-chart', [bar_data], {*/
/*           grid  : {*/
/*             borderWidth: 1,*/
/*             borderColor: '#f3f3f3',*/
/*             tickColor  : '#f3f3f3'*/
/*           },*/
/*           series: {*/
/*             bars: {*/
/*               show    : true,*/
/*               barWidth: 0.5,*/
/*               align   : 'center'*/
/*             }*/
/*           },*/
/*           xaxis : {*/
/*             mode      : 'categories',*/
/*             tickLength: 0*/
/*           }*/
/*         })*/
/*         /* END BAR CHART *//* */
/* */
/*         /**/
/*          * DONUT CHART*/
/*          * -----------*/
/*          *//* */
/* */
/*          var donutData = [*/
/*          { label: 'Series2', data: 30, color: '#3c8dbc' },*/
/*          { label: 'Series3', data: 20, color: '#0073b7' },*/
/*          { label: 'Series4', data: 50, color: '#00c0ef' }*/
/*          ]*/
/*          $.plot('#donut-chart', donutData, {*/
/*           series: {*/
/*             pie: {*/
/*               show       : true,*/
/*               radius     : 1,*/
/*               innerRadius: 0.5,*/
/*               label      : {*/
/*                 show     : true,*/
/*                 radius   : 2 / 3,*/
/*                 formatter: labelFormatter,*/
/*                 threshold: 0.1*/
/*               }*/
/* */
/*             }*/
/*           },*/
/*           legend: {*/
/*             show: false*/
/*           }*/
/*         })*/
/*         /**/
/*          * END DONUT CHART*/
/*          *//* */
/* */
/*        })*/
/* */
/*       /**/
/*        * Custom Label formatter*/
/*        * ----------------------*/
/*        *//* */
/*        function labelFormatter(label, series) {*/
/*         return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'*/
/*         + label*/
/*         + '<br>'*/
/*         + Math.round(series.percent) + '%</div>'*/
/*       }*/
/*       */
/*     </script>*/
/* */
/*     {% endblock %}*/
/*       */
/*       */
/*  */
/* */
/* */
