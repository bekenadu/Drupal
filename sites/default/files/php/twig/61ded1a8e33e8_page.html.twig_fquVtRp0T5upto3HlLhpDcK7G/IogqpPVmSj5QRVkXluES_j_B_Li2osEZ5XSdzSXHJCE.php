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

/* themes/sidus_real_estate/templates/layout/page.html.twig */
class __TwigTemplate_1753c20b400422f9a68af21946807b26ff426e8edd6c507195269e3a8ff6487d extends \Twig\Template
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
        // line 57
        echo "




  <!-- ======= Top Bar ======= -->
  <!-- Start: Top Bar -->
  ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 64)) {
            // line 65
            echo "  <section id=\"topbar\" class=\"d-none d-lg-block\">
    ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "
  </section>
  ";
        }
        // line 69
        echo "  <!-- End: Top Bar -->

  <!-- ======= Header ======= -->
  <header id=\"header\">
    <div class=\"container d-flex\">

      <div class=\"logo mr-auto\">
        <!-- Start: Header -->
        ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 77)) {
            // line 78
            echo "      \t    <div>
          ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 82
        echo "        <!-- End: Header --> 
      </div>

        <!-- Start: Primary Menu -->
        ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 86)) {
            // line 87
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 89
        echo "        <!-- End: Primary Menu -->         
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- Start: Slider Section -->
  ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 95)) {
            // line 96
            echo "  <section id=\"hero\">
    <div class=\"hero-container\">
      <div id=\"heroCarousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">

        <ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

        <div class=\"carousel-inner\" role=\"listbox\">
          ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "          
        </div>

        <a class=\"carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon icofont-rounded-left\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>

        <a class=\"carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon icofont-rounded-right\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
  ";
        }
        // line 120
        echo "  <!-- End: Slider Section -->



  <main id=\"main\">
    
     <!-- ======= Breadcrumbs ======= -->
    <!--- Start: Breadcrumb -->
    ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 128)) {
            // line 129
            echo "    <section id=\"breadcrumbs\" class=\"breadcrumbs\">
      <div class=\"container\">
        ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
        <h2>";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["page"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#title"] ?? null) : null), 132, $this->source), "html", null, true);
            echo "</h2>
      </div>
    </section>
    ";
        }
        // line 136
        echo "    <!-- End: Breadcrumb -->
    <!-- End Breadcrumbs -->



    <!-- ======= Featured Section ======= -->
    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">

        <div class=\"row\">
          
          <!--- Start: Top First Container -->
          ";
        // line 148
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_first", [], "any", false, false, true, 148)) {
            // line 149
            echo "          <div class=\"col-lg-4\">
            ";
            // line 150
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_first", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 153
        echo "          <!-- End: Top First Container -->

          <!--- Start: Top Second Container -->
          ";
        // line 156
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_second", [], "any", false, false, true, 156)) {
            // line 157
            echo "          <div class=\"col-lg-4 mt-4 mt-lg-0\">
            ";
            // line 158
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_second", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 161
        echo "          <!-- End: Top Second Container -->

          <!--- Start: Top Third Container -->
          ";
        // line 164
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_third", [], "any", false, false, true, 164)) {
            // line 165
            echo "          <div class=\"col-lg-4 mt-4 mt-lg-0\">
            ";
            // line 166
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_third", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 169
        echo "          <!-- End: Top Third Container -->

        </div>

      </div>
    </section><!-- End Featured Section -->

    <section id=\"about1\" class=\"about1\">
      <!--- Start: content -->
      ";
        // line 178
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 178)) {
            // line 179
            echo "         <div class=\"container\">
            ";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 183
        echo "      <!---End: content -->
     </section>

    <div class=\"clearfix\"></div>


    <!-- ======= Services Section ======= -->
    <!-- Start: General Section Container -->
    ";
        // line 191
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "general_sections", [], "any", false, false, true, 191)) {
            // line 192
            echo "    <section id=\"services\" class=\"services\">
      <div class=\"container\">
        ";
            // line 194
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "general_sections", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            echo "
      </div>
    </section>
    ";
        }
        // line 198
        echo "    <!-- End: General Section Container -->
    <!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
    <!-- Start: Our Clients -->
    ";
        // line 203
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 203)) {
            // line 204
            echo "    <section id=\"clients\" class=\"clients\">
      <div class=\"container\">
        ";
            // line 206
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
            echo "
      </div>
    </section>
    ";
        }
        // line 210
        echo "    <!-- End: Our Clients -->
    <!-- End Clients Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">
          
          <!-- Start: Footer First Container -->
          ";
        // line 222
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 222)) {
            // line 223
            echo "          <div class=\"col-lg-3 col-md-6 footer-links\">
              ";
            // line 224
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 224), 224, $this->source), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 227
        echo "          <!-- End: Footer First Container -->

          <!-- Start: Footer Second Container -->
          ";
        // line 230
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 230)) {
            // line 231
            echo "          <div class=\"col-lg-3 col-md-6 footer-links\">
            ";
            // line 232
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 232), 232, $this->source), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 235
        echo "          <!-- End: Footer Second Container -->

          <!-- Start: Footer Third Container -->
          ";
        // line 238
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 238)) {
            // line 239
            echo "          <div class=\"col-lg-3 col-md-6 footer-contact\">
            ";
            // line 240
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 240), 240, $this->source), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 243
        echo "          <!-- End: Footer Third Container -->

          <!-- Start: Footer Forth Container -->
          ";
        // line 246
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_forth", [], "any", false, false, true, 246)) {
            // line 247
            echo "          <div class=\"col-lg-3 col-md-6 footer-info\">
            ";
            // line 248
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_forth", [], "any", false, false, true, 248), 248, $this->source), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 251
        echo "          <!-- End: Footer Forth Container -->

        </div>
      </div>
    </div>

   <!-- Start: Footer Copyright -->
   ";
        // line 258
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 258)) {
            // line 259
            echo "    <div class=\"container\">
      ";
            // line 260
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 260), 260, $this->source), "html", null, true);
            echo " 
    </div>
   ";
        }
        // line 263
        echo "   <!-- End: Footer Copyright -->

  </footer><!-- End Footer -->

  <a href=\"#\" class=\"back-to-top\"><i class=\"icofont-simple-up\"></i></a>

 
";
    }

    public function getTemplateName()
    {
        return "themes/sidus_real_estate/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 263,  369 => 260,  366 => 259,  364 => 258,  355 => 251,  349 => 248,  346 => 247,  344 => 246,  339 => 243,  333 => 240,  330 => 239,  328 => 238,  323 => 235,  317 => 232,  314 => 231,  312 => 230,  307 => 227,  301 => 224,  298 => 223,  296 => 222,  282 => 210,  275 => 206,  271 => 204,  269 => 203,  262 => 198,  255 => 194,  251 => 192,  249 => 191,  239 => 183,  233 => 180,  230 => 179,  228 => 178,  217 => 169,  211 => 166,  208 => 165,  206 => 164,  201 => 161,  195 => 158,  192 => 157,  190 => 156,  185 => 153,  179 => 150,  176 => 149,  174 => 148,  160 => 136,  153 => 132,  149 => 131,  145 => 129,  143 => 128,  133 => 120,  113 => 103,  104 => 96,  102 => 95,  94 => 89,  88 => 87,  86 => 86,  80 => 82,  74 => 79,  71 => 78,  69 => 77,  59 => 69,  53 => 66,  50 => 65,  48 => 64,  39 => 57,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/sidus_real_estate/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupall\\themes\\sidus_real_estate\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 64);
        static $filters = array("escape" => 66);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
