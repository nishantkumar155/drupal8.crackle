<?php

/* themes/redcrackle/template/page/page--.html.twig */
class __TwigTemplate_2c67be09590ec519a5461f35bc3185f45bad0ae3a645fc85b37cf3b35cb7472c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 7);
        $filters = array("t" => 25);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"main_wrapper\">
    <header >
        <div class=\"container\">
            <div id =\"top_header\">
                <div class=\"row\">
                    <div class=\"six column\">
                        ";
        // line 7
        if (((isset($context["header_login"]) ? $context["header_login"] : null) || (isset($context["header_contact"]) ? $context["header_contact"] : null))) {
            // line 8
            echo "                            <ul class=\"header_icon left\">
                                ";
            // line 9
            if ((isset($context["header_login"]) ? $context["header_login"] : null)) {
                echo "<li><a href=\"#\" data-reveal-id=\"login_modal\"><i class=\"general foundicon-settings\"></i></a></li>";
            }
            // line 10
            echo "                                ";
            if ((isset($context["header_contact"]) ? $context["header_contact"] : null)) {
                echo "<li><a href=\"#\" data-reveal-id=\"contact_modal\"><i class=\"general foundicon-mail\"></i></a></li>";
            }
            // line 11
            echo "                            </ul>
                        ";
        }
        // line 13
        echo "                    </div>
                    ";
        // line 14
        if ((isset($context["header_top_left"]) ? $context["header_top_left"] : null)) {
            // line 15
            echo "                        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array()), "html", null, true));
            echo "
                    ";
        }
        // line 17
        echo "                </div>
                ";
        // line 18
        if ((isset($context["header_top_right"]) ? $context["header_top_right"] : null)) {
            // line 19
            echo "                    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array()), "right", array()), "html", null, true));
            echo "
                ";
        }
        // line 21
        echo "            </div>
            <div class=\"row\">
                <div class=\"three columns branding\">
                    ";
        // line 24
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 25
            echo "                        <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" id=\"logo\">
                            <img src=\"";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Red Crackle Home")));
            echo "\" />
                        </a>
                    ";
        }
        // line 28
        echo " ";
        // line 29
        echo "                    ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 30
            echo "                        <div id=\"name-and-slogan\" ";
            if (((isset($context["disable_site_name"]) ? $context["disable_site_name"] : null) && (isset($context["disable_site_slogan"]) ? $context["disable_site_slogan"] : null))) {
                echo " class=\"hidden\" ";
            }
            echo " >
                            ";
            // line 31
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 32
                echo "                                <h1 id=\"main_title_text\" ";
                if ((isset($context["disable_site_name"]) ? $context["disable_site_name"] : null)) {
                    echo " class=\"hidden\" ";
                }
                echo ">
                                    <a href= \"";
                // line 33
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\"><span> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</span></a>
                                </h1>
                            ";
            }
            // line 36
            echo "                            ";
            if ((isset($context["site_slogon"]) ? $context["site_slogon"] : null)) {
                // line 37
                echo "                                <h2 id=\"main_title_slogan\" ";
                if ((isset($context["disable_site_slogan"]) ? $context["disable_site_slogan"] : null)) {
                    echo " class=\"hidden\" ";
                }
                echo " >
                                    ";
                // line 38
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "
                                </h2>
                            ";
            }
            // line 41
            echo "                        </div>
                    ";
        }
        // line 43
        echo "                </div>
                ";
        // line 45
        echo "                <div class=\"nine columns\">
                    <div id=\"nav\">
                        ";
        // line 48
        echo "                        <nav class=\"top-bar\">
                            <ul class=\"left\">
                                <li class=\"name\">
                                    <h1>
                                        <a href=\"#\">
                                            Select a page
                                        </a>
                                    </h1>
                                </li>
                                <li class=\"toggle-topbar\"><a href=\"#\"></a></li>
                            </ul>
                            <section class=\"menu_wrap\">
                                ";
        // line 60
        if ((isset($context["header_menu"]) ? $context["header_menu"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array()), "html", null, true));
            echo " ";
        }
        // line 61
        echo "                            </section>
                        </nav>
                    </div>
                </div>
                ";
        // line 66
        echo "            </div>
        </div>
    </header>
    ";
        // line 70
        echo "    <div id=\"login_modal\" class=\"reveal-modal medium\">
        ";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_login", array()), "html", null, true));
        echo "
        <a class=\"close-reveal-modal\">&#215;</a>
    </div>
    <div id=\"heading_wrapper\">
        ";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_heading", array()), "html", null, true));
        echo "
        ";
        // line 77
        echo "        <div class=\"row\">
            <div class=\"twelve columns\">
                ";
        // line 80
        echo "                ";
        // line 81
        echo "                ";
        // line 82
        echo "                ";
        // line 83
        echo "                ";
        // line 84
        echo "                ";
        // line 85
        echo "            </div>
        </div>
        ";
        // line 88
        echo "
        <div class=\"row\">
            <div id=\"main_contain_wrap\"  class = \"";
        // line 90
        if (((isset($context["sidebar_first"]) ? $context["sidebar_first"] : null) || (isset($context["sidebar_second"]) ? $context["sidebar_second"] : null))) {
            echo " eight columns ";
        } else {
            echo " twelve columns ";
        }
        echo "\">
                ";
        // line 92
        echo "                ";
        // line 93
        echo "                ";
        // line 94
        echo "
                ";
        // line 96
        echo "                ";
        // line 97
        echo "                ";
        // line 98
        echo "                ";
        // line 99
        echo "                ";
        // line 100
        echo "                ";
        // line 101
        echo "                ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                ";
        // line 102
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 103
            echo "                    <div class=\"four columns\">
                        <div id=\"sidebar_wrap\">
                            ";
            // line 105
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 106
                echo "                                <aside id=\"sidebar-first\" role=\"complementary\" class=\"sidebar clearfix\">
                                    ";
                // line 107
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
                                </aside>
                            ";
            }
            // line 110
            echo "                            ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
                // line 111
                echo "                                <aside id=\"sidebar-second\" role=\"complementary\" class=\"sidebar clearfix\">
                                    ";
                // line 112
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
                                </aside>
                            ";
            }
            // line 115
            echo "                        </div>
                    </div>
                ";
        }
        // line 118
        echo "            </div>
        </div>
    </div>
</div>
<div id=\"after-content\">
    ";
        // line 123
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
        echo "
</div>
<div id=\"footer\">
    <div class=\"container\">
        ";
        // line 127
        if (((((isset($context["footer_1"]) ? $context["footer_1"] : null) || (isset($context["footer_2"]) ? $context["footer_2"] : null)) || (isset($context["footer_3"]) ? $context["footer_3"] : null)) || (isset($context["footer_4"]) ? $context["footer_4"] : null))) {
            // line 128
            echo "
            <div class=\"row\">
                <div class=\"three columns\">
                    ";
            // line 131
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()), "html", null, true));
            echo "
                </div>
                <div class=\"three columns\">
                    ";
            // line 134
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array()), "html", null, true));
            echo "
                </div>

                <div class=\"three columns\">
                    ";
            // line 138
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array()), "html", null, true));
            echo "
                </div>

                <div class=\"three columns\">
                    ";
            // line 142
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()), "html", null, true));
            echo "
                </div>
            </div>
        ";
        }
        // line 146
        echo "    </div>
    ";
        // line 147
        if ((isset($context["footer_full"]) ? $context["footer_full"] : null)) {
            // line 148
            echo "        <div class=\"row\">
            <div class=\"twelve columns\">
                ";
            // line 150
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_full", array()), "html", null, true));
            echo "
            </div>
        </div>
    ";
        }
        // line 154
        echo "</div>
";
        // line 155
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "modal_markup", array()), "html", null, true));
    }

    public function getTemplateName()
    {
        return "themes/redcrackle/template/page/page--.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 155,  366 => 154,  359 => 150,  355 => 148,  353 => 147,  350 => 146,  343 => 142,  336 => 138,  329 => 134,  323 => 131,  318 => 128,  316 => 127,  309 => 123,  302 => 118,  297 => 115,  291 => 112,  288 => 111,  285 => 110,  279 => 107,  276 => 106,  274 => 105,  270 => 103,  268 => 102,  263 => 101,  261 => 100,  259 => 99,  257 => 98,  255 => 97,  253 => 96,  250 => 94,  248 => 93,  246 => 92,  238 => 90,  234 => 88,  230 => 85,  228 => 84,  226 => 83,  224 => 82,  222 => 81,  220 => 80,  216 => 77,  212 => 75,  205 => 71,  202 => 70,  197 => 66,  191 => 61,  185 => 60,  171 => 48,  167 => 45,  164 => 43,  160 => 41,  154 => 38,  147 => 37,  144 => 36,  134 => 33,  127 => 32,  125 => 31,  118 => 30,  115 => 29,  113 => 28,  105 => 26,  98 => 25,  96 => 24,  91 => 21,  85 => 19,  83 => 18,  80 => 17,  74 => 15,  72 => 14,  69 => 13,  65 => 11,  60 => 10,  56 => 9,  53 => 8,  51 => 7,  43 => 1,);
    }
}
/* <div id="main_wrapper">*/
/*     <header >*/
/*         <div class="container">*/
/*             <div id ="top_header">*/
/*                 <div class="row">*/
/*                     <div class="six column">*/
/*                         {% if header_login or header_contact %}*/
/*                             <ul class="header_icon left">*/
/*                                 {% if header_login %}<li><a href="#" data-reveal-id="login_modal"><i class="general foundicon-settings"></i></a></li>{% endif %}*/
/*                                 {% if header_contact %}<li><a href="#" data-reveal-id="contact_modal"><i class="general foundicon-mail"></i></a></li>{% endif %}*/
/*                             </ul>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% if header_top_left %}*/
/*                         {{ page.header_top_left }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 {% if header_top_right %}*/
/*                     {{ page.header_top.right }}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="three columns branding">*/
/*                     {% if logo %}*/
/*                         <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo">*/
/*                             <img src="{{ logo }}" alt="{{ 'Red Crackle Home'|t }}" />*/
/*                         </a>*/
/*                     {% endif %} {#end logo#}*/
/*                     {% if site_name or site_slogan %}*/
/*                         <div id="name-and-slogan" {% if disable_site_name and disable_site_slogan %} class="hidden" {% endif %} >*/
/*                             {% if site_name %}*/
/*                                 <h1 id="main_title_text" {% if disable_site_name %} class="hidden" {% endif %}>*/
/*                                     <a href= "{{ front_page }}" title="{{ 'Home'|t }}" rel="home"><span> {{ site_name }}</span></a>*/
/*                                 </h1>*/
/*                             {% endif %}*/
/*                             {% if site_slogon %}*/
/*                                 <h2 id="main_title_slogan" {% if disable_site_slogan %} class="hidden" {% endif %} >*/
/*                                     {{  site_slogan }}*/
/*                                 </h2>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 {#end of branding#}*/
/*                 <div class="nine columns">*/
/*                     <div id="nav">*/
/*                         {#begin menu#}*/
/*                         <nav class="top-bar">*/
/*                             <ul class="left">*/
/*                                 <li class="name">*/
/*                                     <h1>*/
/*                                         <a href="#">*/
/*                                             Select a page*/
/*                                         </a>*/
/*                                     </h1>*/
/*                                 </li>*/
/*                                 <li class="toggle-topbar"><a href="#"></a></li>*/
/*                             </ul>*/
/*                             <section class="menu_wrap">*/
/*                                 {% if header_menu %} {{ page.header_menu }} {% endif %}*/
/*                             </section>*/
/*                         </nav>*/
/*                     </div>*/
/*                 </div>*/
/*                 {#end of menu#}*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/*     {# Header login modal (block region) #}*/
/*     <div id="login_modal" class="reveal-modal medium">*/
/*         {{ page.header_login }}*/
/*         <a class="close-reveal-modal">&#215;</a>*/
/*     </div>*/
/*     <div id="heading_wrapper">*/
/*         {{ page.page_heading }}*/
/*         {#{%  if  not ( drupal_is_front_page()) %}#}*/
/*         <div class="row">*/
/*             <div class="twelve columns">*/
/*                 {#<h2 class="page_heading_text"> {{  title }}</h2>#}*/
/*                 {#<div id="breadcrumbs">#}*/
/*                 {#<h3>{% if (theme_get_setting('breadcrumbs') == '1') %}#}*/
/*                 {#{% set {{ breadcrumb }} ~ {{ title }} %}#}*/
/*                 {#{% endif %}#}*/
/*                 {#</h3></div>#}*/
/*             </div>*/
/*         </div>*/
/*         {#{%  endif %}#}*/
/* */
/*         <div class="row">*/
/*             <div id="main_contain_wrap"  class = "{% if sidebar_first or sidebar_second  %} eight columns {% else %} twelve columns {% endif %}">*/
/*                 {#<div id="main_content" class="clearfix">#}*/
/*                 {#{{ title_prefix }}#}*/
/*                 {#{{ title_suffix }}#}*/
/* */
/*                 {#{{ page.help }}#}*/
/*                 {#{% if (action_link) %}#}*/
/*                 {#<ul class="action-links">#}*/
/*                 {#{{ pahe.action_link }}#}*/
/*                 {#</ul>#}*/
/*                 {#{% endif %}#}*/
/*                 {{ page.content }}*/
/*                 {% if page.sidebar_first or page.sidebar_second %}*/
/*                     <div class="four columns">*/
/*                         <div id="sidebar_wrap">*/
/*                             {% if page.sidebar_first %}*/
/*                                 <aside id="sidebar-first" role="complementary" class="sidebar clearfix">*/
/*                                     {{ page.sidebar_first }}*/
/*                                 </aside>*/
/*                             {% endif %}*/
/*                             {% if page.sidebar_second %}*/
/*                                 <aside id="sidebar-second" role="complementary" class="sidebar clearfix">*/
/*                                     {{ page.sidebar_second }}*/
/*                                 </aside>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div id="after-content">*/
/*     {{ page.after_content }}*/
/* </div>*/
/* <div id="footer">*/
/*     <div class="container">*/
/*         {% if footer_1 or footer_2 or footer_3 or footer_4 %}*/
/* */
/*             <div class="row">*/
/*                 <div class="three columns">*/
/*                     {{ page.footer_1 }}*/
/*                 </div>*/
/*                 <div class="three columns">*/
/*                     {{ page.footer_2 }}*/
/*                 </div>*/
/* */
/*                 <div class="three columns">*/
/*                     {{ page.footer_3 }}*/
/*                 </div>*/
/* */
/*                 <div class="three columns">*/
/*                     {{ page.footer_4 }}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/*     {% if footer_full  %}*/
/*         <div class="row">*/
/*             <div class="twelve columns">*/
/*                 {{ page.footer_full }}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/* {{ page.modal_markup }}*/
