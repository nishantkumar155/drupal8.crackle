<?php

/* themes/redcrackle/template/page/page.html.twig */
class __TwigTemplate_7864efd27c857666cd5f62a3f7d3bf8ab8a2bf8748ccfda25f1d5b4599ea45c7 extends Twig_Template
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
        $filters = array("t" => 28);
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

                    <a href=\"";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
        echo "\" rel=\"home\" id=\"logo\">
                        <img src=\"";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logopath"]) ? $context["logopath"] : null), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Red Crackle Home")));
        echo "\" />
                    </a>
                    ";
        // line 32
        echo "
                    ";
        // line 34
        echo "                        ";
        // line 35
        echo "                            ";
        // line 36
        echo "                        ";
        // line 37
        echo "                    ";
        // line 38
        echo "
                    ";
        // line 40
        echo "                        ";
        // line 41
        echo "                        ";
        // line 42
        echo "                        ";
        // line 43
        echo "                        ";
        // line 44
        echo "                        ";
        // line 45
        echo "                            ";
        // line 46
        echo "                                ";
        // line 47
        echo "                                    ";
        // line 48
        echo "                                        ";
        // line 49
        echo "                                    ";
        // line 50
        echo "                                ";
        // line 51
        echo "                                ";
        // line 52
        echo "                                    ";
        // line 53
        echo "                                        ";
        // line 54
        echo "                                    ";
        // line 55
        echo "                                ";
        // line 56
        echo "                            ";
        // line 57
        echo "                        ";
        // line 58
        echo "                    ";
        // line 59
        echo "                </div>
                ";
        // line 61
        echo "                <div class=\"nine columns\">
                    <div id=\"nav\">
                        ";
        // line 64
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
        // line 76
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array())) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array()), "html", null, true));
            echo " ";
        }
        // line 77
        echo "                            </section>
                        </nav>
                    </div>
                </div>
                ";
        // line 82
        echo "            </div>
        </div>
    </header>
    ";
        // line 86
        echo "    <div id=\"login_modal\" class=\"reveal-modal medium\">
        ";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_login", array()), "html", null, true));
        echo "
        <a class=\"close-reveal-modal\">&#215;</a>
    </div>
    <div id=\"contact_modal\" class=\"reveal-modal medium\">
        ";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_contact", array()), "html", null, true));
        echo "
        <a class=\"close-reveal-modal\">&#215;</a>
    </div>
    <div id=\"heading_wrapper\">
        ";
        // line 95
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_heading", array()), "html", null, true));
        echo "
        ";
        // line 97
        echo "        <div class=\"row\">
            <div class=\"twelve columns\">
                ";
        // line 100
        echo "                ";
        // line 101
        echo "                ";
        // line 102
        echo "                ";
        // line 103
        echo "                ";
        // line 104
        echo "                ";
        // line 105
        echo "                ";
        // line 106
        echo "            </div>
        </div>
    </div>
    ";
        // line 110
        echo "
    <div class=\"row\">
        <div id=\"main_contain_wrap\"  class = \"";
        // line 112
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            echo " eight columns ";
        } else {
            echo " twelve columns ";
        }
        echo "\">
            ";
        // line 114
        echo "            ";
        // line 115
        echo "            ";
        // line 116
        echo "
            ";
        // line 118
        echo "            ";
        // line 119
        echo "            ";
        // line 120
        echo "            ";
        // line 121
        echo "            ";
        // line 122
        echo "            ";
        // line 123
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 125
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 126
            echo "            <div class=\"four columns\">
                <div id=\"sidebar_wrap\">
                    ";
            // line 128
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 129
                echo "                        <aside id=\"sidebar-first\" role=\"complementary\" class=\"sidebar clearfix\">
                            ";
                // line 130
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
                        </aside>
                    ";
            }
            // line 133
            echo "                    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
                // line 134
                echo "                        <aside id=\"sidebar-second\" role=\"complementary\" class=\"sidebar clearfix\">
                            ";
                // line 135
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
                        </aside>
                    ";
            }
            // line 138
            echo "                </div>
            </div>
        ";
        }
        // line 141
        echo "
    </div>

</div>
<div id=\"after-content\">
    ";
        // line 146
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
        echo "
</div>
<div id=\"footer\">
    <div class=\"container\">
        ";
        // line 150
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()))) {
            // line 151
            echo "
            <div class=\"row\">
                <div class=\"three columns\">
                    ";
            // line 154
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()), "html", null, true));
            echo "
                </div>
                <div class=\"three columns\">
                    ";
            // line 157
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array()), "html", null, true));
            echo "
                </div>

                <div class=\"three columns\">
                    ";
            // line 161
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array()), "html", null, true));
            echo "
                </div>

                <div class=\"three columns\">
                    ";
            // line 165
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()), "html", null, true));
            echo "
                </div>
            </div>
        ";
        }
        // line 169
        echo "    </div>
    ";
        // line 170
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_full", array())) {
            // line 171
            echo "        <div class=\"row\">
            <div class=\"twelve columns\">
                ";
            // line 173
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_full", array()), "html", null, true));
            echo "
            </div>
        </div>
    ";
        }
        // line 177
        echo "</div>
";
        // line 178
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "modal_markup", array()), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/redcrackle/template/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 178,  378 => 177,  371 => 173,  367 => 171,  365 => 170,  362 => 169,  355 => 165,  348 => 161,  341 => 157,  335 => 154,  330 => 151,  328 => 150,  321 => 146,  314 => 141,  309 => 138,  303 => 135,  300 => 134,  297 => 133,  291 => 130,  288 => 129,  286 => 128,  282 => 126,  280 => 125,  274 => 123,  272 => 122,  270 => 121,  268 => 120,  266 => 119,  264 => 118,  261 => 116,  259 => 115,  257 => 114,  249 => 112,  245 => 110,  240 => 106,  238 => 105,  236 => 104,  234 => 103,  232 => 102,  230 => 101,  228 => 100,  224 => 97,  220 => 95,  213 => 91,  206 => 87,  203 => 86,  198 => 82,  192 => 77,  186 => 76,  172 => 64,  168 => 61,  165 => 59,  163 => 58,  161 => 57,  159 => 56,  157 => 55,  155 => 54,  153 => 53,  151 => 52,  149 => 51,  147 => 50,  145 => 49,  143 => 48,  141 => 47,  139 => 46,  137 => 45,  135 => 44,  133 => 43,  131 => 42,  129 => 41,  127 => 40,  124 => 38,  122 => 37,  120 => 36,  118 => 35,  116 => 34,  113 => 32,  106 => 29,  100 => 28,  92 => 22,  86 => 20,  84 => 19,  80 => 17,  74 => 15,  72 => 14,  69 => 13,  65 => 11,  60 => 10,  56 => 9,  53 => 8,  51 => 7,  43 => 1,);
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
/* */
/*                     <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo">*/
/*                         <img src="{{ logopath }}" alt="{{ 'Red Crackle Home'|t }}" />*/
/*                     </a>*/
/*                     {#{% if logo %}#}*/
/* */
/*                     {#{% if site_logo %}#}*/
/*                         {#<a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home" class="site-logo">#}*/
/*                             {#<img src="{{ site_logo }}" alt="{{ 'Home'|t }}" />#}*/
/*                         {#</a>#}*/
/*                     {#{% endif %}#}*/
/* */
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
/*                     {#</a>#}*/
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
