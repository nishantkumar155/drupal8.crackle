<?php

/* themes/redcrackle/template/page/page--node--%.html.twig */
class __TwigTemplate_8b8db2cfc6152fa8e48d61733a6256500d60edddee3a372c634ff04230430edd extends Twig_Template
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
        $filters = array("t" => 31);
        $functions = array("path" => 31);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
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
                    <div class=\"six columns\">
                        ";
        // line 7
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_login", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_contact", array()))) {
            // line 8
            echo "                            <ul class=\"header_icon left\">
                                ";
            // line 9
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_login", array())) {
                echo "<li><a href=\"#\" data-reveal-id=\"login_modal\"><i class=\"general foundicon-settings\"></i></a></li>";
            }
            // line 10
            echo "                                ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_contact", array())) {
                echo "<li><a href=\"#\" data-reveal-id=\"contact_modal\"><i class=\"general foundicon-mail\"></i></a></li>";
            }
            // line 11
            echo "                            </ul>
                        ";
        }
        // line 13
        echo "
                        ";
        // line 14
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array())) {
            // line 15
            echo "                            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array()), "html", null, true));
            echo "
                        ";
        }
        // line 17
        echo "                    </div>
                    <div class=\"six columns\">
                        ";
        // line 19
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array())) {
            // line 20
            echo "                            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array()), "html", null, true));
            echo "
                        ";
        }
        // line 22
        echo "                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"three columns branding\">
                    ";
        // line 30
        echo "                    ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 31
            echo "                        <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" class=\"site-logo\">
                            <img src=\"";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
                        </a>
                    ";
        }
        // line 35
        echo "                    ";
        // line 36
        echo "                    ";
        // line 37
        echo "                        ";
        // line 38
        echo "                        ";
        // line 39
        echo "                        ";
        // line 40
        echo "                        ";
        // line 41
        echo "                        ";
        // line 42
        echo "                            ";
        // line 43
        echo "                                ";
        // line 44
        echo "                                    ";
        // line 45
        echo "                                        ";
        // line 46
        echo "                                    ";
        // line 47
        echo "                                ";
        // line 48
        echo "                                ";
        // line 49
        echo "                                    ";
        // line 50
        echo "                                        ";
        // line 51
        echo "                                    ";
        // line 52
        echo "                                ";
        // line 53
        echo "                            ";
        // line 54
        echo "                        ";
        // line 55
        echo "                </div>
                ";
        // line 57
        echo "                <div class=\"nine columns\">
                    <div id=\"nav\">
                        ";
        // line 60
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
        // line 72
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array())) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array()), "html", null, true));
            echo " ";
        }
        // line 73
        echo "                            </section>
                        </nav>
                    </div>
                </div>
                ";
        // line 78
        echo "            </div>
        </div>
    </header>
    ";
        // line 82
        echo "    <div id=\"login_modal\" class=\"reveal-modal medium\">
        ";
        // line 83
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_login", array()), "html", null, true));
        echo "
        <a class=\"close-reveal-modal\">&#215;</a>
    </div>
    <div id=\"contact_modal\" class=\"reveal-modal medium\">
        ";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_contact", array()), "html", null, true));
        echo "
        <a class=\"close-reveal-modal\">&#215;</a>
    </div>
    <div id=\"heading_wrapper\">
        ";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_heading", array()), "html", null, true));
        echo "
        ";
        // line 93
        echo "        <div class=\"row\">
            <div class=\"twelve columns\">
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
        // line 102
        echo "            </div>
        </div>
    </div>
    ";
        // line 106
        echo "
    <div class=\"row\">
        <div id=\"main_contain_wrap\"  class = \"";
        // line 108
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            echo " eight columns ";
        } else {
            echo " twelve columns ";
        }
        echo "\">
            ";
        // line 110
        echo "            ";
        // line 111
        echo "            ";
        // line 112
        echo "
            ";
        // line 114
        echo "            ";
        // line 115
        echo "            ";
        // line 116
        echo "            ";
        // line 117
        echo "            ";
        // line 118
        echo "            ";
        // line 119
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 121
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 122
            echo "            <div class=\"four columns\">
                <div id=\"sidebar_wrap\">
                    ";
            // line 124
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 125
                echo "                        <aside id=\"sidebar-first\" role=\"complementary\" class=\"sidebar clearfix\">
                            ";
                // line 126
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
                        </aside>
                    ";
            }
            // line 129
            echo "                    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
                // line 130
                echo "                        <aside id=\"sidebar-second\" role=\"complementary\" class=\"sidebar clearfix\">
                            ";
                // line 131
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
                        </aside>
                    ";
            }
            // line 134
            echo "                </div>
            </div>
        ";
        }
        // line 137
        echo "
    </div>

</div>
<div id=\"after-content\">
    ";
        // line 142
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
        echo "
</div>
<div id=\"footer\">
    <div class=\"container\">
        ";
        // line 146
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()))) {
            // line 147
            echo "
            <div class=\"row\">
                <div class=\"three columns\">
                    ";
            // line 150
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()), "html", null, true));
            echo "
                </div>
                <div class=\"three columns\">
                    ";
            // line 153
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array()), "html", null, true));
            echo "
                </div>

                <div class=\"three columns\">
                    ";
            // line 157
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array()), "html", null, true));
            echo "
                </div>

                <div class=\"three columns\">
                    ";
            // line 161
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()), "html", null, true));
            echo "
                </div>
            </div>
        ";
        }
        // line 165
        echo "    </div>
    ";
        // line 166
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_full", array())) {
            // line 167
            echo "        <div class=\"row\">
            <div class=\"twelve columns\">
                ";
            // line 169
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_full", array()), "html", null, true));
            echo "
            </div>
        </div>
    ";
        }
        // line 173
        echo "</div>
";
        // line 174
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "modal_markup", array()), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/redcrackle/template/page/page--node--%.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 174,  370 => 173,  363 => 169,  359 => 167,  357 => 166,  354 => 165,  347 => 161,  340 => 157,  333 => 153,  327 => 150,  322 => 147,  320 => 146,  313 => 142,  306 => 137,  301 => 134,  295 => 131,  292 => 130,  289 => 129,  283 => 126,  280 => 125,  278 => 124,  274 => 122,  272 => 121,  266 => 119,  264 => 118,  262 => 117,  260 => 116,  258 => 115,  256 => 114,  253 => 112,  251 => 111,  249 => 110,  241 => 108,  237 => 106,  232 => 102,  230 => 101,  228 => 100,  226 => 99,  224 => 98,  222 => 97,  220 => 96,  216 => 93,  212 => 91,  205 => 87,  198 => 83,  195 => 82,  190 => 78,  184 => 73,  178 => 72,  164 => 60,  160 => 57,  157 => 55,  155 => 54,  153 => 53,  151 => 52,  149 => 51,  147 => 50,  145 => 49,  143 => 48,  141 => 47,  139 => 46,  137 => 45,  135 => 44,  133 => 43,  131 => 42,  129 => 41,  127 => 40,  125 => 39,  123 => 38,  121 => 37,  119 => 36,  117 => 35,  109 => 32,  102 => 31,  99 => 30,  92 => 22,  86 => 20,  84 => 19,  80 => 17,  74 => 15,  72 => 14,  69 => 13,  65 => 11,  60 => 10,  56 => 9,  53 => 8,  51 => 7,  43 => 1,);
    }
}
/* <div id="main_wrapper">*/
/*     <header >*/
/*         <div class="container">*/
/*             <div id ="top_header">*/
/*                 <div class="row">*/
/*                     <div class="six columns">*/
/*                         {% if page.header_login or page.header_contact %}*/
/*                             <ul class="header_icon left">*/
/*                                 {% if page.header_login %}<li><a href="#" data-reveal-id="login_modal"><i class="general foundicon-settings"></i></a></li>{% endif %}*/
/*                                 {% if page.header_contact %}<li><a href="#" data-reveal-id="contact_modal"><i class="general foundicon-mail"></i></a></li>{% endif %}*/
/*                             </ul>*/
/*                         {% endif %}*/
/* */
/*                         {% if page.header_top_left %}*/
/*                             {{ page.header_top_left }}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="six columns">*/
/*                         {% if page.header_top_right %}*/
/*                             {{ page.header_top_right }}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="three columns branding">*/
/*                     {#<a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo">*/
/*                         <img src="{{ logopath }}" alt="{{ 'Red Crackle Home'|t }}" />*/
/*                     </a>#}*/
/*                     {% if site_logo %}*/
/*                         <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home" class="site-logo">*/
/*                             <img src="{{ site_logo }}" alt="{{ 'Home'|t }}" />*/
/*                         </a>*/
/*                     {% endif %}*/
/*                     {#{% if logo %}#}*/
/*                     {#<a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo">#}*/
/*                         {#<img src="{{ logo }}" alt="{{ 'Red Crackle Home'|t }}" />#}*/
/*                         {#{{ page.header_login }}#}*/
/*                         {#</a>#}*/
/*                         {#{% endif %}#}*/
/*                         {#{% if site_name or site_slogan %}#}*/
/*                             {#<div id="name-and-slogan" {% if disable_site_name and disable_site_slogan %} class="hidden" {% endif %} >#}*/
/*                                 {#{% if site_name %}#}*/
/*                                     {#<h1 id="main_title_text" {% if disable_site_name %} class="hidden" {% endif %}>#}*/
/*                                         {#<a href= "{{ front_page }}" title="{{ 'Home'|t }}" rel="home"><span> {{ site_name }}</span></a>#}*/
/*                                     {#</h1>#}*/
/*                                 {#{% endif %}#}*/
/*                                 {#{% if site_slogon %}#}*/
/*                                     {#<h2 id="main_title_slogan" {% if disable_site_slogan %} class="hidden" {% endif %} >#}*/
/*                                         {#{{  site_slogan }}#}*/
/*                                     {#</h2>#}*/
/*                                 {#{% endif %}#}*/
/*                             {#</div>#}*/
/*                         {#{% endif %}#}*/
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
/*                                 {% if page.header_menu %} {{ page.header_menu }} {% endif %}*/
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
/*     <div id="contact_modal" class="reveal-modal medium">*/
/*         {{ page.header_contact }}*/
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
/*                 {#{{ page.breadcrumb }}#}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {#{%  endif %}#}*/
/* */
/*     <div class="row">*/
/*         <div id="main_contain_wrap"  class = "{% if page.sidebar_first or page.sidebar_second  %} eight columns {% else %} twelve columns {% endif %}">*/
/*             {#<div id="main_content" class="clearfix">#}*/
/*             {#{{ title_prefix }}#}*/
/*             {#{{ title_suffix }}#}*/
/* */
/*             {#{{ page.help }}#}*/
/*             {#{% if (action_link) %}#}*/
/*             {#<ul class="action-links">#}*/
/*             {#{{ pahe.action_link }}#}*/
/*             {#</ul>#}*/
/*             {#{% endif %}#}*/
/*             {{ page.content }}*/
/*         </div>*/
/*         {% if page.sidebar_first or page.sidebar_second %}*/
/*             <div class="four columns">*/
/*                 <div id="sidebar_wrap">*/
/*                     {% if page.sidebar_first %}*/
/*                         <aside id="sidebar-first" role="complementary" class="sidebar clearfix">*/
/*                             {{ page.sidebar_first }}*/
/*                         </aside>*/
/*                     {% endif %}*/
/*                     {% if page.sidebar_second %}*/
/*                         <aside id="sidebar-second" role="complementary" class="sidebar clearfix">*/
/*                             {{ page.sidebar_second }}*/
/*                         </aside>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* <div id="after-content">*/
/*     {{ page.after_content }}*/
/* </div>*/
/* <div id="footer">*/
/*     <div class="container">*/
/*         {% if page.footer_1 or page.footer_2 or page.footer_3 or page.footer_4 %}*/
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
/*     {% if page.footer_full  %}*/
/*         <div class="row">*/
/*             <div class="twelve columns">*/
/*                 {{ page.footer_full }}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/* {{ page.modal_markup }}*/
/* */
