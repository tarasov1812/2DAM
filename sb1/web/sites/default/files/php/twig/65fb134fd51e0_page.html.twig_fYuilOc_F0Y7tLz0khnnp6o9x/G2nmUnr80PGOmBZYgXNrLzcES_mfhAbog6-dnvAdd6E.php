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

/* themes/contrib/d8w3css/templates/layout/page.html.twig */
class __TwigTemplate_9b1650e406fe618c0dc7c7c5acb05bcb extends Template
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
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 57)) {
            // line 58
            echo "  <!-- Start: Main Navigation - Vertical -->
<div id=\"main-navigation-v\" class=\"main-navigation-wrapper w3-sidebar w3-bar-block w3-animate-left w3-theme ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 59, $this->source), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Navigation"));
            echo "\">
  <div id=\"main-navigation-inner-v\" class=\"main-navigation-inner-v\">
    <div id=\"close-nav\" class=\"close-nav w3-button w3-bar-block w3-large w3-theme ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 61, $this->source), "html", null, true);
            echo "\">
      ";
            // line 63
            echo "      <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\">
        <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
        <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
      </svg>
    </div>
    ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
  </div>
</div>
<!-- End: Main Navigation - Vertical -->
";
        }
        // line 73
        echo "<!-- Start: Page Wrapper -->
<div class=\"page-wrapper w3-col w3-clear w3-animate-opacity w3-text-theme ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_wrapper"] ?? null), 74, $this->source), "html", null, true);
        echo "\">

  ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 76) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 76))) {
            // line 77
            echo "  <!-- Start: Header -->
  <header id=\"header\" class=\"w3-col w3-clear w3-theme-l4 ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sitename_animation"] ?? null), 78, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_header"] ?? null), 78, $this->source), "html", null, true);
            echo "\" role=\"banner\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
            echo "\">
    <div id=\"header-inner\" class=\"w3-container header-inner ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 79, $this->source), "html", null, true);
            echo "\">
      ";
            // line 80
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 80)) {
                // line 81
                echo "      <div id=\"open-nav-inner\" class=\"open-nav-inner w3-opacity w3-hover-opacity-off w3-left w3-button w3-left-align w3-large w3-theme ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 81, $this->source), "html", null, true);
                echo "\">
        ";
                // line 83
                echo "        <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\">
          <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
          <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
          <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line>
        </svg>
      </div>
      ";
            }
            // line 90
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 90)) {
                // line 91
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 93
            echo "    </div>
  </header>
  <!-- End: Header -->
  ";
        }
        // line 97
        echo "
  ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 98)) {
            // line 99
            echo "  <!-- Start: Main Navigation - Horizontal -->
  <div id=\"main-navigation-h\" class=\"w3-col w3-clear main-navigation-wrapper w3-theme ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 100, $this->source), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Navigation"));
            echo "\" >
    <div id=\"main-navigation-inner-h\" class=\"w3-row main-navigation-inner-h ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 101, $this->source), "html", null, true);
            echo "\">
      <div class=\"mobile-nav w3-hide-large w3-button w3-block w3-right-align w3-large w3-theme ";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 102, $this->source), "html", null, true);
            echo "\">
        ";
            // line 104
            echo "        <svg aria-hidden=\"true\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"butt\" stroke-linejoin=\"bevel\">
          <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
          <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
          <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line>
        </svg>
      </div>
      ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Horizontal -->
  ";
        }
        // line 115
        echo "
  ";
        // line 116
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_text", [], "any", false, false, true, 116))) {
            // line 117
            echo "  <!-- Start: Welcome Text -->
  <div id=\"welcome-text\" class=\"w3-col w3-clear w3-theme-l5 ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_welcome_text"] ?? null), 118, $this->source), "html", null, true);
            echo "\">
    <div id=\"welcome-text-inner\" class=\"w3-row welcome-text-inner ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 119, $this->source), "html", null, true);
            echo "\">
      ";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_text", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Welcome Text -->
  ";
        }
        // line 125
        echo "
  ";
        // line 126
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 126)) {
            // line 127
            echo "  <!-- Start: Highlighted -->
  <div id=\"highlighted\" class=\"w3-col w3-clear w3-theme-l2 ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_highlighted"] ?? null), 128, $this->source), "html", null, true);
            echo "\">
    <div id=\"highlighted-inner\" class=\"d8-fade w3-row highlighted-inner ";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 129, $this->source), "html", null, true);
            echo "\">
      ";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Highlighted -->
  ";
        }
        // line 135
        echo "
  ";
        // line 136
        if (($context["is_front"] ?? null)) {
            // line 137
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 137) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 137)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 137))) {
                // line 138
                echo "  <!-- Start: Top Container -->
  <div id=\"top-container\" class=\"w3-col w3-clear w3-theme-l4 ";
                // line 139
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_container"] ?? null), 139, $this->source), "html", null, true);
                echo "\">
    <div id=\"top-container-inner\" class=\"w3-row-padding top-container-inner ";
                // line 140
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 140, $this->source), "html", null, true);
                echo "\">
      ";
                // line 141
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 141)) {
                    // line 142
                    echo "      <!-- Start: Top container first region -->
      <div class=\"";
                    // line 143
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 143, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " first-top\">
        <div class=\"d8-fade w3-mobile ";
                    // line 144
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l5 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_first"] ?? null), 144, $this->source), "html", null, true);
                    echo "\">
         ";
                    // line 145
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Top Container First -->
      ";
                }
                // line 150
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 150)) {
                    // line 151
                    echo "      <!-- Start: Top Container Second  -->
      <div class=\"";
                    // line 152
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 152, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " second-top\">
        <div class=\"d8-fade w3-mobile ";
                    // line 153
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l5 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_second"] ?? null), 153, $this->source), "html", null, true);
                    echo "\">
         ";
                    // line 154
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Top Container Second -->
      ";
                }
                // line 159
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 159)) {
                    // line 160
                    echo "      <!-- Start: Top Container Third -->
      <div class=\"";
                    // line 161
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 161, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " third-top\">
        <div class=\"d8-fade w3-mobile ";
                    // line 162
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l5 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_third"] ?? null), 162, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 163
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Top Container Third -->
      ";
                }
                // line 168
                echo "    </div>
  </div>
  <!-- End: Top container -->
    ";
            }
            // line 172
            echo "  ";
        }
        // line 173
        echo "
  ";
        // line 174
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 174) &&  !($context["is_front"] ?? null))) {
            // line 175
            echo "  <!-- Start: Page Title -->
  <div id=\"page-title\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 176
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pagetitle_animation"] ?? null), 176, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_title"] ?? null), 176, $this->source), "html", null, true);
            echo "\">
    <div id=\"page-title-inner\" class=\"d8-fade w3-row page-title-inner ";
            // line 177
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 177, $this->source), "html", null, true);
            echo "\">
      ";
            // line 178
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Page Title -->
  ";
        }
        // line 183
        echo "
  <!-- Start: Main -->
  <div id=\"main-container\" class=\"w3-col w3-clear w3-theme-l5 ";
        // line 185
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_main"] ?? null), 185, $this->source), "html", null, true);
        echo "\">
    <div id=\"main-container-inner\" class=\"w3-row main-container-inner ";
        // line 186
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 186, $this->source), "html", null, true);
        echo "\">
      ";
        // line 187
        if (twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 187))))) {
            // line 188
            echo "      <!-- Breadcrumb -->
      <div class=\"w3-row w3-breadcrumb ";
            // line 189
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_breadcrumb"] ?? null), 189, $this->source), "html", null, true);
            echo "\">
        ";
            // line 190
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
            echo "
      </div>
      <!-- End: Breadcrumb -->
      ";
        }
        // line 194
        echo "      <!-- Start Main Container  -->
      <div class=\"w3-col w3-clear w3-row-padding\">
        ";
        // line 196
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 196)) {
            // line 197
            echo "        <!-- Start Left SideBar -->
        <div class =\"";
            // line 198
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 198, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " first-sidebar\" role=\"complementary\">
          <div class=\"d8-fade w3-sidebar-first w3-mobile ";
            // line 199
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_first"] ?? null), 199, $this->source), "html", null, true);
            echo "\">
            ";
            // line 200
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- End: Left SideBar -->
        ";
        }
        // line 205
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 205)) {
            // line 206
            echo "        <!-- Start: Main Content -->
        <div class=\"";
            // line 207
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_w3css"] ?? null), 207, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " w3css-content\" role=\"main\">
          <div class=\"d8-fade w3-mobile ";
            // line 208
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_content"] ?? null), 208, $this->source), "html", null, true);
            echo "\">
            ";
            // line 209
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- End: Main Content -->
        ";
        }
        // line 214
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 214)) {
            // line 215
            echo "        <!-- Start: Right SideBar -->
        <div class=\"";
            // line 216
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 216, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " second-sidebar\" role=\"complementary\">
          <div class=\"d8-fade w3-sidebar-second w3-mobile ";
            // line 217
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_second"] ?? null), 217, $this->source), "html", null, true);
            echo "\">
            ";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- End: Right SideBar -->
        ";
        }
        // line 223
        echo "      </div>
      <!-- Endn: Main Container  -->
    </div>
  </div>
  <!-- End: Main -->

  ";
        // line 229
        if (($context["is_front"] ?? null)) {
            // line 230
            echo "    ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 230) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 230)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 230)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 230))) {
                // line 231
                echo "      <!-- Start: Bottom -->
  <div id=\"bottom-container\" class=\"w3-col w3-clear w3-theme-l2 ";
                // line 232
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_container"] ?? null), 232, $this->source), "html", null, true);
                echo "\">
    <div id=\"bottom-container-inner\" class=\"w3-row-padding bottom-container-inner ";
                // line 233
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 233, $this->source), "html", null, true);
                echo "\">
      ";
                // line 234
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 234)) {
                    // line 235
                    echo "      <!-- Start: Bottom First -->
      <div class=\"";
                    // line 236
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 236, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " first-bottom\">
        <div class=\"d8-fade w3-mobile ";
                    // line 237
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l4 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_first"] ?? null), 237, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 238
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 238), 238, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Bottom First -->
      ";
                }
                // line 243
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 243)) {
                    // line 244
                    echo "      <!-- Start: Bottom Second -->
      <div class=\"";
                    // line 245
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 245, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " second-bottom\">
        <div class=\"d8-fade w3-mobile ";
                    // line 246
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l4 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_second"] ?? null), 246, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 247
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 247), 247, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Bottom Second -->
      ";
                }
                // line 252
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 252)) {
                    // line 253
                    echo "      <!-- Start: Bottom Third  -->
      <div class=\"";
                    // line 254
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 254, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " third-bottom\">
        <div class=\"d8-fade w3-mobile ";
                    // line 255
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l4 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_third"] ?? null), 255, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 256
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 256), 256, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Bottom Third -->
      ";
                }
                // line 261
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 261)) {
                    // line 262
                    echo "      <!-- Start: Bottom Forth  -->
      <div class =\"";
                    // line 263
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 263, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " forth-bottom\">
        <div class=\"d8-fade w3-mobile ";
                    // line 264
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                    echo " w3-theme-l4 ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_forth"] ?? null), 264, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 265
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Bottom Forth -->
      ";
                }
                // line 270
                echo "    </div>
  </div>
  <!-- End: Bottom -->
    ";
            }
            // line 274
            echo "  ";
        }
        // line 275
        echo "
  ";
        // line 276
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 276) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 276)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 276))) {
            // line 277
            echo "  <!-- start: Footer -->
  <div id=\"footer-container\" class=\"w3-col w3-clear w3-theme-d3 ";
            // line 278
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_container"] ?? null), 278, $this->source), "html", null, true);
            echo "\">
    <div id=\"footer-container-inner\" class=\"w3-row-padding footer-container-inner ";
            // line 279
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 279, $this->source), "html", null, true);
            echo "\">

      ";
            // line 281
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 281)) {
                // line 282
                echo "      <!-- Start: Footer First  -->
      <div class=\"";
                // line 283
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 283, $this->source), "html", null, true);
                echo " footer-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " first-footer\">
        <div class=\"d8-fade w3-mobile ";
                // line 284
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                echo " w3-theme-l4 ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_first"] ?? null), 284, $this->source), "html", null, true);
                echo "\">
          ";
                // line 285
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 285), 285, $this->source), "html", null, true);
                echo "
        </div>
      </div>
      <!-- End: Footer First -->
      ";
            }
            // line 290
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 290)) {
                // line 291
                echo "      <!-- Start: Footer Second Region -->
      <div class=\"";
                // line 292
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 292, $this->source), "html", null, true);
                echo " footer-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " second-footer\">
        <div class=\"d8-fade w3-mobile ";
                // line 293
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                echo " w3-theme-l5 ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_second"] ?? null), 293, $this->source), "html", null, true);
                echo "\">
          ";
                // line 294
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 294), 294, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    <!-- End: Footer Second -->
      ";
            }
            // line 299
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 299)) {
                // line 300
                echo "      <!-- Start: Footer Third -->
      <div class=\"";
                // line 301
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 301, $this->source), "html", null, true);
                echo " footer-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " third-footer\">
        <div class=\"d8-fade w3-mobile ";
                // line 302
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["border_animation"] ?? null)) ? ("animate-border") : ("")));
                echo " w3-theme-l4 ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_third"] ?? null), 302, $this->source), "html", null, true);
                echo "\">
          ";
                // line 303
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
                echo "
        </div>
      </div>
      <!-- End: Footer Third -->
      ";
            }
            // line 308
            echo "    </div>
  </div>
  <!-- End: Footer -->
  ";
        }
        // line 312
        echo "
  ";
        // line 313
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 313) || ($context["show_social_icon"] ?? null))) {
            // line 314
            echo "    <!-- Start: Footer Menu -->
  <div id=\"footer-menu\" class=\"w3-col w3-clear w3-theme-d4 ";
            // line 315
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_menu"] ?? null), 315, $this->source), "html", null, true);
            echo "\">
    <div id=\"footer-menu-inner\" class=\"w3-row footer-menu-inner ";
            // line 316
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 316, $this->source), "html", null, true);
            echo "\">
      ";
            // line 317
            if (($context["show_social_icon"] ?? null)) {
                // line 318
                echo "        <!-- Start: Social Media -->
      <div class=\"d8-fade w3-center w3-container w3-mobile social-media\">
        ";
                // line 320
                if (($context["facebook_url"] ?? null)) {
                    // line 321
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 321, $this->source), "html", null, true);
                    echo "\" title=\"Facebook\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-facebook\"></i></a>
        ";
                }
                // line 323
                echo "        ";
                if (($context["twitter_url"] ?? null)) {
                    // line 324
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 324, $this->source), "html", null, true);
                    echo "\" title=\"Twitter\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-twitter\"></i></a>
        ";
                }
                // line 326
                echo "        ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 327
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 327, $this->source), "html", null, true);
                    echo "\" title=\"Pinterest\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-pinterest\"></i></a>
        ";
                }
                // line 329
                echo "        ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 330
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 330, $this->source), "html", null, true);
                    echo "\" title=\"Linkedin\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-linkedin\"></i></a>
        ";
                }
                // line 332
                echo "        ";
                if (($context["instagram_url"] ?? null)) {
                    // line 333
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 333, $this->source), "html", null, true);
                    echo "\" title=\"Instagram\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-instagram\"></i></a>
        ";
                }
                // line 335
                echo "        ";
                if (($context["youtube_url"] ?? null)) {
                    // line 336
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 336, $this->source), "html", null, true);
                    echo "\" title=\"Youtube\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"w3-social-icon fa-youtube\"></i></a>
        ";
                }
                // line 338
                echo "        ";
                if (($context["drupal_url"] ?? null)) {
                    // line 339
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["drupal_url"] ?? null), 339, $this->source), "html", null, true);
                    echo "\" title=\"Drupal\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\" ><i class=\"w3-social-icon fa-drupal\"></i></a>
        ";
                }
                // line 341
                echo "        ";
                if (($context["mastodon_url"] ?? null)) {
                    // line 342
                    echo "          <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mastodon_url"] ?? null), 342, $this->source), "html", null, true);
                    echo "\" title=\"Mastodon\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\" ><i class=\"w3-social-icon fa-mastodon\"></i></a>
        ";
                }
                // line 344
                echo "        ";
                if (($context["rss_url"] ?? null)) {
                    // line 345
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 345, $this->source), "html", null, true);
                    echo "\" title=\"RSS Feed\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-orange w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\" ><i class=\"w3-social-icon fa-rss\"></i></a>
        ";
                }
                // line 347
                echo "      </div>
      <!-- End: Social Media -->
      ";
            }
            // line 350
            echo "      <!-- Start: Bottom Menu -->
      ";
            // line 351
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 351)) {
                // line 352
                echo "      <div class=\"d8-fade w3-container w3-center w3-mobile\">
        ";
                // line 353
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 353), 353, $this->source), "html", null, true);
                echo "
      </div>
      <!-- End: Bottom Menu -->
      ";
            }
            // line 357
            echo "    </div>
  </div>
  <!-- End: Footer Menu -->
  ";
        }
        // line 361
        echo "
  ";
        // line 362
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 363
            echo "  <!-- Start: Copyright -->
  <div id=\"copyright\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 364
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_copyright"] ?? null), 364, $this->source), "html", null, true);
            echo "\">
    <div id=\"copyright-inner\" class=\"w3-row copyright-inner ";
            // line 365
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 365, $this->source), "html", null, true);
            echo "\">
      ";
            // line 366
            if (($context["copyright_text"] ?? null)) {
                // line 367
                echo "      <!-- Start: Copyright -->
      <div class=\"w3-half w3-container w3-mobile\">
        <p class=\"w3-section w3-left-align w3-opacity w3-hover-opacity-off\">
        ";
                // line 370
                $context["currentDate"] = twig_date_format_filter($this->env, "now", "Y");
                // line 371
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 371, $this->source), ["%year%" => ($context["currentDate"] ?? null)]), "html", null, true);
                echo "
        </p>
      </div>
      <!-- End: Copyright -->
      ";
            }
            // line 376
            echo "      ";
            if (($context["show_credit_link"] ?? null)) {
                // line 377
                echo "      <!-- Start: Credit Link -->
      <div class=\"w3-half w3-container w3-mobile\">
        <p class=\"w3-section w3-right-align w3-opacity w3-hover-opacity-off\">Developed &#38; Designed by <a href=\"https://www.alaahaddad.com\" title=\"Alaa Haddad\" target=\"_blank\">Alaa Haddad</a></p>
      </div>
      <!-- End: Credit Link -->
      ";
            }
            // line 383
            echo "    </div>
  </div>
  <!-- End: Copyright -->
  ";
        }
        // line 387
        echo "</div>
<!-- End: Page Wrapper -->
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "color_primary_menu", "color_page_wrapper", "sitename_animation", "color_header", "website_width", "is_front", "color_welcome_text", "color_highlighted", "color_top_container", "top_w3css", "top_region", "border_animation", "color_top_first", "color_top_second", "color_top_third", "pagetitle_animation", "color_page_title", "color_main", "color_breadcrumb", "sidebarfirst", "main_region", "color_sidebar_first", "content_w3css", "color_content", "sidebarsecond", "color_sidebar_second", "color_bottom_container", "bottom_w3css", "bottom_region", "color_bottom_first", "color_bottom_second", "color_bottom_third", "color_bottom_forth", "color_footer_container", "footer_w3css", "footer_region", "color_footer_first", "color_footer_second", "color_footer_third", "show_social_icon", "color_footer_menu", "facebook_url", "twitter_url", "pinterest_url", "linkedin_url", "instagram_url", "youtube_url", "drupal_url", "mastodon_url", "rss_url", "copyright_text", "show_credit_link", "color_copyright"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/layout/page.html.twig";
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
        return array (  862 => 387,  856 => 383,  848 => 377,  845 => 376,  836 => 371,  834 => 370,  829 => 367,  827 => 366,  823 => 365,  819 => 364,  816 => 363,  814 => 362,  811 => 361,  805 => 357,  798 => 353,  795 => 352,  793 => 351,  790 => 350,  785 => 347,  779 => 345,  776 => 344,  770 => 342,  767 => 341,  761 => 339,  758 => 338,  752 => 336,  749 => 335,  743 => 333,  740 => 332,  734 => 330,  731 => 329,  725 => 327,  722 => 326,  716 => 324,  713 => 323,  707 => 321,  705 => 320,  701 => 318,  699 => 317,  695 => 316,  691 => 315,  688 => 314,  686 => 313,  683 => 312,  677 => 308,  669 => 303,  663 => 302,  657 => 301,  654 => 300,  651 => 299,  643 => 294,  637 => 293,  631 => 292,  628 => 291,  625 => 290,  617 => 285,  611 => 284,  605 => 283,  602 => 282,  600 => 281,  595 => 279,  591 => 278,  588 => 277,  586 => 276,  583 => 275,  580 => 274,  574 => 270,  566 => 265,  560 => 264,  554 => 263,  551 => 262,  548 => 261,  540 => 256,  534 => 255,  528 => 254,  525 => 253,  522 => 252,  514 => 247,  508 => 246,  502 => 245,  499 => 244,  496 => 243,  488 => 238,  482 => 237,  476 => 236,  473 => 235,  471 => 234,  467 => 233,  463 => 232,  460 => 231,  457 => 230,  455 => 229,  447 => 223,  439 => 218,  435 => 217,  429 => 216,  426 => 215,  423 => 214,  415 => 209,  411 => 208,  405 => 207,  402 => 206,  399 => 205,  391 => 200,  387 => 199,  381 => 198,  378 => 197,  376 => 196,  372 => 194,  365 => 190,  361 => 189,  358 => 188,  356 => 187,  352 => 186,  348 => 185,  344 => 183,  336 => 178,  332 => 177,  326 => 176,  323 => 175,  321 => 174,  318 => 173,  315 => 172,  309 => 168,  301 => 163,  295 => 162,  289 => 161,  286 => 160,  283 => 159,  275 => 154,  269 => 153,  263 => 152,  260 => 151,  257 => 150,  249 => 145,  243 => 144,  237 => 143,  234 => 142,  232 => 141,  228 => 140,  224 => 139,  221 => 138,  218 => 137,  216 => 136,  213 => 135,  205 => 130,  201 => 129,  197 => 128,  194 => 127,  192 => 126,  189 => 125,  181 => 120,  177 => 119,  173 => 118,  170 => 117,  168 => 116,  165 => 115,  157 => 110,  149 => 104,  145 => 102,  141 => 101,  135 => 100,  132 => 99,  130 => 98,  127 => 97,  121 => 93,  115 => 91,  112 => 90,  103 => 83,  98 => 81,  96 => 80,  92 => 79,  84 => 78,  81 => 77,  79 => 76,  74 => 74,  71 => 73,  63 => 68,  56 => 63,  52 => 61,  45 => 59,  42 => 58,  39 => 57,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/layout/page.html.twig", "/home/alektara/home/alektara/public_html/sb/sb1/web/themes/contrib/d8w3css/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 57, "set" => 370);
        static $filters = array("escape" => 59, "t" => 59, "trim" => 187, "striptags" => 187, "render" => 187, "date" => 370, "replace" => 371);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 't', 'trim', 'striptags', 'render', 'date', 'replace'],
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
