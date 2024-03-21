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

/* themes/contrib/d8w3css/templates/navigation/menu.html.twig */
class __TwigTemplate_6038aff75aaf26c899da67cc407f6364 extends Template
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
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 26, $context, $this->getSourceContext()));
        echo "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_name", "menu_level"]);    }

    // line 27
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 28
            echo "  ";
            $macros["menus"] = $this;
            // line 29
            echo "  ";
            // line 30
            $context["menu_classes"] = [("ul-parent ul-parent-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 31
($context["menu_name"] ?? null), 31, $this->source)))];
            // line 34
            echo "  ";
            // line 35
            $context["submenu_classes"] = [("ul-child ul-child-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 36
($context["menu_name"] ?? null), 36, $this->source)))];
            // line 39
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 40
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 41
                    echo "<ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo " role=\"menu\">
  ";
                } else {
                    // line 43
                    echo "  <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 43), "addClass", [($context["submenu_classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo " role=\"menu\">
    ";
                }
                // line 45
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "      ";
                    // line 47
                    $context["item_classes"] = [("li-item li-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 48
($context["menu_name"] ?? null), 48, $this->source))), ((twig_get_attribute($this->env, $this->source,                     // line 49
$context["item"], "is_expanded", [], "any", false, false, true, 49)) ? ("li-expanded") : ("")), (((twig_get_attribute($this->env, $this->source,                     // line 50
$context["item"], "is_expanded", [], "any", false, false, true, 50) && (($context["menu_level"] ?? null) == 0))) ? ("li-parent") : ("")), ((twig_get_attribute($this->env, $this->source,                     // line 51
$context["item"], "in_active_trail", [], "any", false, false, true, 51)) ? ("active") : (""))];
                    // line 54
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 54))) {
                        // line 55
                        echo "      <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 55), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo " role=\"none\">
        ";
                        // line 56
                        if (((is_string($__internal_compile_0 = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 56))) && is_string($__internal_compile_1 = "/") && str_starts_with($__internal_compile_0, $__internal_compile_1)) || (is_string($__internal_compile_2 = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 56))) && is_string($__internal_compile_3 = "http") && str_starts_with($__internal_compile_2, $__internal_compile_3)))) {
                            // line 57
                            echo "          <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                            echo "\" class=\"w3-button link-enabled clickable-dropdown-menu-link toggle-parent\" role=\"menuitem\" aria-haspopup=\"true\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                            echo "</a>
          <span class=\"dropdown-arrow w3-hover-over clickable-dropdown-menu-fa-down\">
              ";
                            // line 60
                            echo "              <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\"><path d=\"M6 9l6 6 6-6\"/></svg>
          </span>
        ";
                        } else {
                            // line 63
                            echo "          <a href=\"#\" class=\"w3-button link-disabled tMenu toggle-parent\" role=\"menuitem\" aria-haspopup=\"true\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                            echo "
            <span class=\"dropdown-arrow\">
              ";
                            // line 66
                            echo "              <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\"><path d=\"M6 9l6 6 6-6\"/></svg>
            </span>
          </a>
        ";
                        }
                        // line 70
                        echo "      ";
                    } elseif (((($context["menu_level"] ?? null) != 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 70))) {
                        // line 71
                        echo "      <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 71), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 71), 71, $this->source), "html", null, true);
                        echo " role=\"none\">
        ";
                        // line 72
                        if (((is_string($__internal_compile_4 = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 72))) && is_string($__internal_compile_5 = "/") && str_starts_with($__internal_compile_4, $__internal_compile_5)) || (is_string($__internal_compile_6 = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 72))) && is_string($__internal_compile_7 = "http") && str_starts_with($__internal_compile_6, $__internal_compile_7)))) {
                            // line 73
                            echo "          <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                            echo "\" class=\"w3-button link-enabled clickable-dropdown-menu-link toggle-child\" role=\"menuitem\" aria-haspopup=\"true\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                            echo "</a>
          <span class=\"right-arrow w3-hover-over clickable-dropdown-menu-fa-right\">
            ";
                            // line 76
                            echo "            <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 18l6-6-6-6\"/></svg>
          </span>
          <span class=\"dropdown-arrow w3-hover-over clickable-dropdown-menu-fa-down\">
            ";
                            // line 80
                            echo "            <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\"><path d=\"M6 9l6 6 6-6\"/></svg>
          </span>
        ";
                        } else {
                            // line 83
                            echo "          <a href=\"#\" class=\"w3-button link-disabled tMenu toggle-child\" role=\"menuitem\" aria-haspopup=\"true\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                            echo "
            <span class=\"right-arrow w3-hover-over\">
              ";
                            // line 86
                            echo "              <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 18l6-6-6-6\"/></svg>
            </span>
            <span class=\"dropdown-arrow w3-hover-over\">
              ";
                            // line 90
                            echo "              <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\"><path d=\"M6 9l6 6 6-6\"/></svg>
            </span>
          </a>
        ";
                        }
                        // line 94
                        echo "      ";
                    } else {
                        // line 95
                        echo "        ";
                        // line 96
                        $context["link_classes"] = [("w3-button li-link li-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                        // line 97
($context["menu_name"] ?? null), 97, $this->source)))];
                        // line 100
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 100), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 100), 100, $this->source), "html", null, true);
                        echo " role=\"none\">
        ";
                        // line 101
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 103
$context["item"], "title", [], "any", false, false, true, 103), 103, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 104
$context["item"], "url", [], "any", false, false, true, 104), 104, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 105
$context["item"], "attributes", [], "any", false, false, true, 105), "removeClass", [($context["item_classes"] ?? null)], "method", false, false, true, 105), "addClass", [($context["link_classes"] ?? null)], "method", false, false, true, 105), 105, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 106
$context["item"], "attributes", [], "any", false, false, true, 106), "setAttribute", ["role", "menuitem"], "method", false, false, true, 106), 106, $this->source)), "html", null, true);
                        // line 108
                        echo "
      ";
                    }
                    // line 110
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 110)) {
                        // line 111
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 111), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)], 111, $context, $this->getSourceContext()));
                        echo "
      ";
                    }
                    // line 113
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "  </ul>
  ";
            }
            // line 117
            echo "  ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/navigation/menu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  231 => 117,  227 => 115,  220 => 113,  214 => 111,  211 => 110,  207 => 108,  205 => 106,  204 => 105,  203 => 104,  202 => 103,  201 => 101,  196 => 100,  194 => 97,  193 => 96,  191 => 95,  188 => 94,  182 => 90,  177 => 86,  171 => 83,  166 => 80,  161 => 76,  153 => 73,  151 => 72,  146 => 71,  143 => 70,  137 => 66,  131 => 63,  126 => 60,  118 => 57,  116 => 56,  111 => 55,  108 => 54,  106 => 51,  105 => 50,  104 => 49,  103 => 48,  102 => 47,  100 => 46,  95 => 45,  89 => 43,  83 => 41,  80 => 40,  77 => 39,  75 => 36,  74 => 35,  72 => 34,  70 => 31,  69 => 30,  67 => 29,  64 => 28,  48 => 27,  41 => 26,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/navigation/menu.html.twig", "/home/alektara/home/alektara/public_html/sb/sb1/web/themes/contrib/d8w3css/templates/navigation/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 27, "set" => 30, "if" => 39, "for" => 45);
        static $filters = array("clean_class" => 31, "escape" => 41, "render" => 56);
        static $functions = array("link" => 102);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class', 'escape', 'render'],
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
