<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/decor_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_4059ff7d51f5664d39957c85c7843caf41e4f26fc765c9022ddd954ffd6e8f4f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
<!-- Start: Top Bar -->

<div class=\"container\">

  ";
        // line 102
        echo "  <!-- End: Top Bar -->


  <!-- Start: Header -->

  <div class=\"header\">
    <div class=\"container-\">
      <div class=\"row\">
        <div class=\"navbar-header col-md\">
          ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 111)) {
            // line 112
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 114
        echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <i class=\"fas fa-bars\"></i>
          </button>
          ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 117)) {
            // line 118
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 120
        echo "        </div>
      </div>
    </div>
  </div>
  <!-- End: Header -->


  <!-- Start: Slides -->
  ";
        // line 128
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 129
            echo "    <div class=\"container-\">
      <div class=\"flexslider\">
        <ul class=\"slides\">
          ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 133
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 133, $this->source));
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "        </ul>
      </div>
    </div>
  ";
        }
        // line 139
        echo "  <!-- End: Slides -->

  <div class=\"regions-group-\">

    ";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_image", [], "any", false, false, true, 143) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_desc", [], "any", false, false, true, 143))) {
            // line 144
            echo "      <div class=\"topblock regions-group\">
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 146
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_image", [], "any", false, false, true, 146)) {
                // line 147
                echo "            <div class=\"col-sm-4 block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_image", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 149
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_desc", [], "any", false, false, true, 149)) {
                // line 150
                echo "            <div class=\"col-sm block-content-wrap\">
              <div class=\"block-content\">";
                // line 151
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_desc", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 154
            echo "        </div>
      </div>
    ";
        }
        // line 157
        echo "  
    ";
        // line 158
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_image", [], "any", false, false, true, 158) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_desc", [], "any", false, false, true, 158))) {
            // line 159
            echo "      <div class=\"topblock regions-group\">
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 161
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_desc", [], "any", false, false, true, 161)) {
                // line 162
                echo "            <div class=\"col-sm block-content-wrap\">
              <div class=\"block-content\">";
                // line 163
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_desc", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 166
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_image", [], "any", false, false, true, 166)) {
                // line 167
                echo "            <div class=\"col-sm-4 block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_image", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 169
            echo "        </div>
      </div>
    ";
        }
        // line 172
        echo "
  </div>

      
  <!--Start: Highlighted -->
  ";
        // line 177
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 177)) {
            // line 178
            echo "    <div class=\"highlighted\">
      <div class=\"container-\">
        ";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 184
        echo "  <!--End: Highlighted -->


  <!--Start: Top Message -->
  ";
        // line 188
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_message", [], "any", false, false, true, 188)) {
            // line 189
            echo "    <div class=\"container-\">
      <div class=\"top-message\">
        ";
            // line 191
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_message", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 195
        echo "  <!--End: Top Message -->


  <!--Start: Title -->
  ";
        // line 199
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 199) &&  !($context["is_front"] ?? null))) {
            // line 200
            echo "    <div id=\"page-title\">
      <div id=\"page-title-inner\">
        <div class=\"container-\">
          ";
            // line 203
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 208
        echo "  <!--End: Title -->


  <div class=\"main-content regions-group\">
    <div class=\"container-\">
      <div class=\"\">
        <!--Start: Breadcrumb -->
        ";
        // line 215
        if ( !($context["is_front"] ?? null)) {
            // line 216
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 217
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
            echo "</div>
          </div>
        ";
        }
        // line 220
        echo "        <!--End: Breadcrumb -->
        <div class=\"row layout\">
          <!--- Start: Left SideBar -->
          ";
        // line 223
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 223)) {
            // line 224
            echo "            <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 224, $this->source), "html", null, true);
            echo ">
              <div class=\"sidebar\">
                ";
            // line 226
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          ";
        }
        // line 230
        echo "          <!-- End Left SideBar -->
          <!--- Start Content -->
          ";
        // line 232
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 232)) {
            // line 233
            echo "            <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 233, $this->source), "html", null, true);
            echo ">
              <div class=\"content_layout\">
                ";
            // line 235
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
            echo "
              </div>              
            </div>
          ";
        }
        // line 239
        echo "          <!-- End: Content -->
          <!-- Start: Right SideBar -->
          ";
        // line 241
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 241)) {
            // line 242
            echo "            <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 242, $this->source), "html", null, true);
            echo ">
              <div class=\"sidebar\">
                ";
            // line 244
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          ";
        }
        // line 248
        echo "          <!-- End: Right SideBar -->
        </div>
      </div>
    </div>
  </div>
  <!-- End: Main content -->


  ";
        // line 256
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "products", [], "any", false, false, true, 256)) {
            // line 257
            echo "    <div class=\"products regions-group\">
      ";
            // line 258
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "products", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 261
        echo "

  <!-- Start: Features -->
  ";
        // line 264
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 264) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 264)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 264))) {
            // line 265
            echo "    <div class=\"features regions-group\">
      <div class=\"container-\">
        ";
            // line 267
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 267)) {
                // line 268
                echo "          <h2 class=\"custom-block-title\" >
            ";
                // line 269
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
                echo "
          </h2>
        ";
            }
            // line 272
            echo "        <div class=\"row features-list\">
          ";
            // line 273
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 273)) {
                // line 274
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 274, $this->source), "html", null, true);
                echo ">
              ";
                // line 275
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 275), 275, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 278
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 278)) {
                // line 279
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 279, $this->source), "html", null, true);
                echo ">
              ";
                // line 280
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 280), 280, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 283
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 283)) {
                // line 284
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 284, $this->source), "html", null, true);
                echo ">
              ";
                // line 285
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 285), 285, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 288
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 292
        echo "  <!--End: Features -->


  <!-- Start: Footer widgets -->
  ";
        // line 296
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 296) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 296)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 296))) {
            // line 297
            echo "    <div class=\"footer regions-group\" id=\"footer\">
      <div class=\"container-\">
        ";
            // line 299
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 299)) {
                // line 300
                echo "          <h2 class=\"custom-block-title\" >
            ";
                // line 301
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
                echo "
          </h2>
        ";
            }
            // line 304
            echo "        <div class=\"row\">
          ";
            // line 305
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 305)) {
                // line 306
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 306, $this->source), "html", null, true);
                echo ">
              ";
                // line 307
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 307), 307, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 310
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 310)) {
                // line 311
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 311, $this->source), "html", null, true);
                echo ">
              ";
                // line 312
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 312), 312, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 315
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 315)) {
                // line 316
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 316, $this->source), "html", null, true);
                echo ">
              ";
                // line 317
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 320
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 324
        echo "  <!--End: Footer widgets -->


  <!-- Start: Copyright -->
  <div class=\"copyright regions-group\">
    <div class=\"container-\">
      <span>Copyright © ";
        // line 330
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
      ";
        // line 331
        if (($context["show_credit_link"] ?? null)) {
            // line 332
            echo "        <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 334
        echo "    </div>
  </div>
  <!-- End: Copyright -->

</div>





";
    }

    public function getTemplateName()
    {
        return "themes/decor_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 334,  503 => 332,  501 => 331,  497 => 330,  489 => 324,  483 => 320,  477 => 317,  472 => 316,  469 => 315,  463 => 312,  458 => 311,  455 => 310,  449 => 307,  444 => 306,  442 => 305,  439 => 304,  433 => 301,  430 => 300,  428 => 299,  424 => 297,  422 => 296,  416 => 292,  410 => 288,  404 => 285,  399 => 284,  396 => 283,  390 => 280,  385 => 279,  382 => 278,  376 => 275,  371 => 274,  369 => 273,  366 => 272,  360 => 269,  357 => 268,  355 => 267,  351 => 265,  349 => 264,  344 => 261,  338 => 258,  335 => 257,  333 => 256,  323 => 248,  316 => 244,  310 => 242,  308 => 241,  304 => 239,  297 => 235,  291 => 233,  289 => 232,  285 => 230,  278 => 226,  272 => 224,  270 => 223,  265 => 220,  259 => 217,  256 => 216,  254 => 215,  245 => 208,  237 => 203,  232 => 200,  230 => 199,  224 => 195,  217 => 191,  213 => 189,  211 => 188,  205 => 184,  198 => 180,  194 => 178,  192 => 177,  185 => 172,  180 => 169,  174 => 167,  171 => 166,  165 => 163,  162 => 162,  160 => 161,  156 => 159,  154 => 158,  151 => 157,  146 => 154,  140 => 151,  137 => 150,  134 => 149,  128 => 147,  126 => 146,  122 => 144,  120 => 143,  114 => 139,  108 => 135,  99 => 133,  95 => 132,  90 => 129,  88 => 128,  78 => 120,  72 => 118,  70 => 117,  65 => 114,  59 => 112,  57 => 111,  46 => 102,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/decor_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupall\\themes\\decor_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 111, "for" => 132);
        static $filters = array("escape" => 112, "raw" => 133, "date" => 330);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
