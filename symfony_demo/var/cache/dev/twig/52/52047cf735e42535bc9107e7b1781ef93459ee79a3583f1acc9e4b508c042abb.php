<?php

/* admin/blog/index.html.twig */
class __TwigTemplate_59ed589c1fa7d96c9585593b5097947e4f993ff4b34fc5853656e7f911e64d5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d2a182d4ad11818c9b4dcca0b5d52f6f299894bbeb127d94bf56e809cea3873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2a182d4ad11818c9b4dcca0b5d52f6f299894bbeb127d94bf56e809cea3873->enter($__internal_3d2a182d4ad11818c9b4dcca0b5d52f6f299894bbeb127d94bf56e809cea3873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $__internal_1741906cb7537fa4b8ed1c36eb1f2259c9c16b3d0fcc31606592449930b4ce63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1741906cb7537fa4b8ed1c36eb1f2259c9c16b3d0fcc31606592449930b4ce63->enter($__internal_1741906cb7537fa4b8ed1c36eb1f2259c9c16b3d0fcc31606592449930b4ce63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d2a182d4ad11818c9b4dcca0b5d52f6f299894bbeb127d94bf56e809cea3873->leave($__internal_3d2a182d4ad11818c9b4dcca0b5d52f6f299894bbeb127d94bf56e809cea3873_prof);

        
        $__internal_1741906cb7537fa4b8ed1c36eb1f2259c9c16b3d0fcc31606592449930b4ce63->leave($__internal_1741906cb7537fa4b8ed1c36eb1f2259c9c16b3d0fcc31606592449930b4ce63_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_544fe37a94b6ebbe96429afe9cd244480da0ce8e36718203d3ec6e8cb72b4b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544fe37a94b6ebbe96429afe9cd244480da0ce8e36718203d3ec6e8cb72b4b18->enter($__internal_544fe37a94b6ebbe96429afe9cd244480da0ce8e36718203d3ec6e8cb72b4b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_ecc1577c8eb0bef676070f4686dd1d1ad1f107507e0dde845b6a084c715913e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc1577c8eb0bef676070f4686dd1d1ad1f107507e0dde845b6a084c715913e4->enter($__internal_ecc1577c8eb0bef676070f4686dd1d1ad1f107507e0dde845b6a084c715913e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_index";
        
        $__internal_ecc1577c8eb0bef676070f4686dd1d1ad1f107507e0dde845b6a084c715913e4->leave($__internal_ecc1577c8eb0bef676070f4686dd1d1ad1f107507e0dde845b6a084c715913e4_prof);

        
        $__internal_544fe37a94b6ebbe96429afe9cd244480da0ce8e36718203d3ec6e8cb72b4b18->leave($__internal_544fe37a94b6ebbe96429afe9cd244480da0ce8e36718203d3ec6e8cb72b4b18_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_0083608196eaae653313f5cf578182c0619f0cd7d4f5891319f7f41c76115dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0083608196eaae653313f5cf578182c0619f0cd7d4f5891319f7f41c76115dcf->enter($__internal_0083608196eaae653313f5cf578182c0619f0cd7d4f5891319f7f41c76115dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6bf4cff0ec7f1409c94ee57753beeab197f7e1753f675eba0df7c710c5a3b8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf4cff0ec7f1409c94ee57753beeab197f7e1753f675eba0df7c710c5a3b8d4->enter($__internal_6bf4cff0ec7f1409c94ee57753beeab197f7e1753f675eba0df7c710c5a3b8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.post_list"), "html", null, true);
        echo "</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.published_at"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                ";
            // line 23
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["post"], "publishedAt", array()), "medium", "short", null, "UTC"), "html", null, true);
            echo "</td>
                <td class=\"text-right\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit"), "html", null, true);
            echo "
                        </a>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"4\" align=\"center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_posts_found"), "html", null, true);
            echo "</td>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
";
        
        $__internal_6bf4cff0ec7f1409c94ee57753beeab197f7e1753f675eba0df7c710c5a3b8d4->leave($__internal_6bf4cff0ec7f1409c94ee57753beeab197f7e1753f675eba0df7c710c5a3b8d4_prof);

        
        $__internal_0083608196eaae653313f5cf578182c0619f0cd7d4f5891319f7f41c76115dcf->leave($__internal_0083608196eaae653313f5cf578182c0619f0cd7d4f5891319f7f41c76115dcf_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c495c36be98cecf435513bfdc4244f30d5c87bbebda607f5ff4d71e5e3cbbd47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c495c36be98cecf435513bfdc4244f30d5c87bbebda607f5ff4d71e5e3cbbd47->enter($__internal_c495c36be98cecf435513bfdc4244f30d5c87bbebda607f5ff4d71e5e3cbbd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_023dcc6798cca381bbf41ce27b40f2b32f71c2c78943df3e6c59883552fa4dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023dcc6798cca381bbf41ce27b40f2b32f71c2c78943df3e6c59883552fa4dda->enter($__internal_023dcc6798cca381bbf41ce27b40f2b32f71c2c78943df3e6c59883552fa4dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 46
        echo "    <div class=\"section actions\">
        <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_new");
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.create_post"), "html", null, true);
        echo "
        </a>
    </div>

    ";
        // line 52
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 54
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_023dcc6798cca381bbf41ce27b40f2b32f71c2c78943df3e6c59883552fa4dda->leave($__internal_023dcc6798cca381bbf41ce27b40f2b32f71c2c78943df3e6c59883552fa4dda_prof);

        
        $__internal_c495c36be98cecf435513bfdc4244f30d5c87bbebda607f5ff4d71e5e3cbbd47->leave($__internal_c495c36be98cecf435513bfdc4244f30d5c87bbebda607f5ff4d71e5e3cbbd47_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 54,  184 => 52,  177 => 48,  173 => 47,  170 => 46,  161 => 45,  149 => 41,  140 => 38,  137 => 37,  126 => 31,  122 => 30,  116 => 27,  112 => 26,  105 => 23,  101 => 19,  98 => 18,  93 => 17,  86 => 13,  82 => 12,  78 => 11,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_post_index' %}

{% block main %}
    <h1>{{ 'title.post_list'|trans }}</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">{{ 'label.title'|trans }}</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> {{ 'label.published_at'|trans }}</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td>{{ post.title }}</td>
                {# it's not mandatory to set the timezone in localizeddate(). This is done to
                   avoid errors when the 'intl' PHP extension is not available and the application
                   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
                <td>{{ post.publishedAt|localizeddate('medium', 'short', null, 'UTC') }}</td>
                <td class=\"text-right\">
                    <div class=\"item-actions\">
                        <a href=\"{{ path('admin_post_show', {id: post.id}) }}\" class=\"btn btn-sm btn-default\">
                            {{ 'action.show'|trans }}
                        </a>

                        <a href=\"{{ path('admin_post_edit', {id: post.id}) }}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
                        </a>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\" align=\"center\">{{ 'post.no_posts_found'|trans }}</td>
           </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}

{% block sidebar %}
    <div class=\"section actions\">
        <a href=\"{{ path('admin_post_new') }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> {{ 'action.create_post'|trans }}
        </a>
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/index.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\admin\\blog\\index.html.twig");
    }
}
