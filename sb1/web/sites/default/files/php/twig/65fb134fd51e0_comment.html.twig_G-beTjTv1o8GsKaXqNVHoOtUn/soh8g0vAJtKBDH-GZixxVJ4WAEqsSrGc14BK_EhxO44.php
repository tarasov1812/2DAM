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

/* themes/contrib/d8w3css/templates/content/comment.html.twig */
class __TwigTemplate_0b73e7142fc23bfb904a5a0f4c1076a7 extends Template
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
        // line 69
        if (($context["threaded"] ?? null)) {
            // line 70
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("claro/classy.indented"), "html", null, true);
            echo "
";
        }
        // line 72
        $context["classes"] = ["w3-row", "comment", "js-comment", (((        // line 76
($context["status"] ?? null) != "published")) ? (($context["status"] ?? null)) : ("")), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 77
($context["comment"] ?? null), "owner", [], "any", false, false, true, 77), "anonymous", [], "any", false, false, true, 77)) ? ("by-anonymous") : ("")), (((        // line 78
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 78)))) ? ((("by-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getEntityTypeId", [], "method", false, false, true, 78), 78, $this->source)) . "-author")) : (""))];
        // line 81
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "html", null, true);
        echo ">
  ";
        // line 87
        echo "  <span class=\"hidden\" data-comment-timestamp=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 87, $this->source), "html", null, true);
        echo "\"></span>

  <footer class=\"comment__meta\">
    ";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 90, $this->source), "html", null, true);
        echo "
    <p class=\"comment__author\">";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 91, $this->source), "html", null, true);
        echo "</p>
    <p class=\"comment__time\">";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 92, $this->source), "html", null, true);
        echo "</p>
    <p class=\"comment__permalink\">";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["permalink"] ?? null), 93, $this->source), "html", null, true);
        echo "</p>

    ";
        // line 100
        echo "    ";
        if (($context["parent"] ?? null)) {
            // line 101
            echo "      <p class=\"parent visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 101, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        // line 103
        echo "  </footer>

  <div";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["comment__content"], "method", false, false, true, 105), 105, $this->source), "html", null, true);
        echo ">
    ";
        // line 106
        if (($context["title"] ?? null)) {
            // line 107
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 107, $this->source), "html", null, true);
            echo "
      <h3";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 108, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 108, $this->source), "html", null, true);
            echo "</h3>
      ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 109, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 111
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 111, $this->source), "html", null, true);
        echo "
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["threaded", "status", "comment", "author_id", "commented_entity", "attributes", "new_indicator_timestamp", "user_picture", "author", "created", "permalink", "parent", "content_attributes", "title", "title_prefix", "title_attributes", "title_suffix", "content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/content/comment.html.twig";
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
        return array (  116 => 111,  111 => 109,  105 => 108,  100 => 107,  98 => 106,  94 => 105,  90 => 103,  84 => 101,  81 => 100,  76 => 93,  72 => 92,  68 => 91,  64 => 90,  57 => 87,  52 => 81,  50 => 78,  49 => 77,  48 => 76,  47 => 72,  41 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/content/comment.html.twig", "/home/alektara/home/alektara/public_html/sb/sb1/web/themes/contrib/d8w3css/templates/content/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 69, "set" => 72);
        static $filters = array("escape" => 70);
        static $functions = array("attach_library" => 70);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['attach_library']
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
