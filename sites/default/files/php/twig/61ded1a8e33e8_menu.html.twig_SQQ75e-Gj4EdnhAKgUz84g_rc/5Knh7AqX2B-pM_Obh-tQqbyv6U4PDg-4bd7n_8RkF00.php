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

/* themes/sidus_real_estate/templates/navigation/menu.html.twig */
class __TwigTemplate_a6f706bcb35a9d96f073a58c2feeacd2fc4d9ffc35ba1f6bac54367a71eeef3d extends \Twig\Template
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
        // line 21
        echo "
<nav class=\"nav-menu d-none d-lg-block\">

";
        // line 24
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 25
        echo "
";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 30, $context, $this->getSourceContext()));
        echo "

";
        // line 62
        echo "</nav>


<!--header id=\"header\">
    <div class=\"container d-flex\">

      <div class=\"logo mr-auto\">
        <h1 class=\"text-light\"><a href=\"index.html\"><span>Eterna</span></a></h1>
       
         <a href=\"index.html\"><img src=\"themes/custom/alextoby/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>
      </div>

      <nav class=\"nav-menu d-none d-lg-block\">
        <ul>
          <li class=\"active\"><a href=\"index.html\">Home</a></li>

          <li class=\"drop-down\"><a href=\"#\">About</a>
            <ul>
              <li><a href=\"about.html\">About Us</a></li>
              <li><a href=\"team.html\">Team</a></li>

              <li class=\"drop-down\"><a href=\"#\">Drop Down 2</a>
                <ul>
                  <li><a href=\"#\">Deep Drop Down 1</a></li>
                  <li><a href=\"#\">Deep Drop Down 2</a></li>
                  <li><a href=\"#\">Deep Drop Down 3</a></li>
                  <li><a href=\"#\">Deep Drop Down 4</a></li>
                  <li><a href=\"#\">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href=\"services.html\">Services</a></li>
          <li><a href=\"portfolio.html\">Portfolio</a></li>
          <li><a href=\"pricing.html\">Pricing</a></li>
          <li><a href=\"blog.html\">Blog</a></li>
          <li><a href=\"contact.html\">Contact</a></li>

        </ul>
      </nav>

    </div>
  </header-->






 <!--header id=\"header\" class=\"fixed-top \">
    <div class=\"container-fluid d-flex align-items-center justify-content-between\">

      <h1 class=\"logo\"><a href=\"#\">Company</a></h1-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo\"><img src=\"themes/custom/contours/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <!--nav class=\"nav-menu d-none d-lg-block\">
        <ul>
          <li class=\"active\"><a href=\"#\">Home</a></li>
          <li><a href=\"about\">About</a></li>
          <li><a href=\"services\">Services</a></li>
          <li><a href=\"portfolio\">Portfolio</a></li>
          <li><a href=\"team\">Team</a></li>
          <li class=\"drop-down\"><a href=\"\">Drop Down</a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li class=\"drop-down\"><a href=\"#\">Deep Drop Down</a>
                <ul>
                  <li><a href=\"#\">Deep Drop Down 1</a></li>
                  <li><a href=\"#\">Deep Drop Down 2</a></li>
                  <li><a href=\"#\">Deep Drop Down 3</a></li>
                  <li><a href=\"#\">Deep Drop Down 4</a></li>
                  <li><a href=\"#\">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Drop Down 2</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href=\"#contact\">Contact</a></li>

        </ul>
      </nav--><!-- .nav-menu -->

      <!--a href=\"#about\" class=\"get-started-btn scrollto\">Get Started</a>

    </div>
  </header--><!-- End Header -->
";
    }

    // line 32
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "  ";
            $macros["menus"] = $this;
            // line 34
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 35
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 36
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 38
                    echo "      <ul class=\"menu\">
    ";
                }
                // line 40
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    echo "      ";
                    // line 42
                    $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "is_expanded", [], "any", false, false, true, 44)) ? ("menu-item--expanded drop-down") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["item"], "is_collapsed", [], "any", false, false, true, 45)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 46
$context["item"], "in_active_trail", [], "any", false, false, true, 46)) ? ("menu-item--active-trail") : (""))];
                    // line 49
                    echo "      
      <li";
                    // line 50
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 50), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo ">
      <!--li";
                    // line 51
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 51), "addClass", [0 => "drop-down"], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo "-->
        ";
                    // line 52
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), 52, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), 52, $this->source)), "html", null, true);
                    echo "
        ";
                    // line 53
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 53)) {
                        // line 54
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 54), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 54, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 56
                    echo "      </li>
      
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/sidus_real_estate/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 59,  217 => 56,  211 => 54,  209 => 53,  205 => 52,  201 => 51,  197 => 50,  194 => 49,  192 => 46,  191 => 45,  190 => 44,  189 => 42,  187 => 41,  182 => 40,  178 => 38,  172 => 36,  169 => 35,  166 => 34,  163 => 33,  148 => 32,  54 => 62,  49 => 30,  46 => 25,  44 => 24,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/sidus_real_estate/templates/navigation/menu.html.twig", "C:\\xampp\\htdocs\\drupall\\themes\\sidus_real_estate\\templates\\navigation\\menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 24, "macro" => 32, "if" => 34, "for" => 40, "set" => 42);
        static $filters = array("escape" => 36);
        static $functions = array("link" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
