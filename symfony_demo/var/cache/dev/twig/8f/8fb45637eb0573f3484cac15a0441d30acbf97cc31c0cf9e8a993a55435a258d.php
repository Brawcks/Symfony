<?php

/* admin/blog/_form.html.twig */
class __TwigTemplate_d87868de08c77755fc836dfebcdc44b0c758353b3acd5a392a8ac77b6d2e6550 extends Twig_Template
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
        $__internal_6b42a215dd382a991e3f3299cebb0d34367fdcef7f49f4115b5802a93282e3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b42a215dd382a991e3f3299cebb0d34367fdcef7f49f4115b5802a93282e3ac->enter($__internal_6b42a215dd382a991e3f3299cebb0d34367fdcef7f49f4115b5802a93282e3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/_form.html.twig"));

        $__internal_efd4fe0a47cac655f7b70666d4770ba0f13644c4a5b7eec7a0e4dc0504486682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd4fe0a47cac655f7b70666d4770ba0f13644c4a5b7eec7a0e4dc0504486682->enter($__internal_efd4fe0a47cac655f7b70666d4770ba0f13644c4a5b7eec7a0e4dc0504486682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/_form.html.twig"));

        // line 8
        echo "
";
        // line 9
        if (((array_key_exists("show_confirmation", $context)) ? (_twig_default_filter(($context["show_confirmation"] ?? $this->getContext($context, "show_confirmation")), false)) : (false))) {
            // line 10
            echo "    ";
            $context["attr"] = array("data-confirmation" => "true");
            // line 11
            echo "    ";
            echo twig_include($this->env, $context, "blog/_delete_post_confirmation.html.twig");
            echo "
";
        }
        // line 13
        echo "
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => ((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? $this->getContext($context, "attr")), array())) : (array()))));
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? $this->getContext($context, "button_label")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.create_post"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.create_post"))), "html", null, true);
        echo "\"
           class=\"";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("button_css", $context)) ? (_twig_default_filter(($context["button_css"] ?? $this->getContext($context, "button_css")), "btn btn-primary")) : ("btn btn-primary")), "html", null, true);
        echo "\" />

    ";
        // line 20
        if (((array_key_exists("include_back_to_home_link", $context)) ? (_twig_default_filter(($context["include_back_to_home_link"] ?? $this->getContext($context, "include_back_to_home_link")), false)) : (false))) {
            // line 21
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\" class=\"btn btn-link\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.back_to_list"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6b42a215dd382a991e3f3299cebb0d34367fdcef7f49f4115b5802a93282e3ac->leave($__internal_6b42a215dd382a991e3f3299cebb0d34367fdcef7f49f4115b5802a93282e3ac_prof);

        
        $__internal_efd4fe0a47cac655f7b70666d4770ba0f13644c4a5b7eec7a0e4dc0504486682->leave($__internal_efd4fe0a47cac655f7b70666d4770ba0f13644c4a5b7eec7a0e4dc0504486682_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  67 => 22,  62 => 21,  60 => 20,  55 => 18,  51 => 17,  46 => 15,  42 => 14,  39 => 13,  33 => 11,  30 => 10,  28 => 9,  25 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
    By default, forms enable client-side validation. This means that you can't
    test the server-side validation errors from the browser. To temporarily
    disable this validation, add the 'novalidate' attribute:

    {{ form_start(form, {attr: {novalidate: 'novalidate'}}) }}
#}

{% if show_confirmation|default(false) %}
    {% set attr = {'data-confirmation': 'true'} %}
    {{ include('blog/_delete_post_confirmation.html.twig') }}
{% endif %}

{{ form_start(form, {attr: attr|default({})}) }}
    {{ form_widget(form) }}

    <input type=\"submit\" value=\"{{ button_label|default('label.create_post'|trans) }}\"
           class=\"{{ button_css|default(\"btn btn-primary\") }}\" />

    {% if include_back_to_home_link|default(false) %}
        <a href=\"{{ path('admin_post_index') }}\" class=\"btn btn-link\">
            {{ 'action.back_to_list'|trans }}
        </a>
    {% endif %}
{{ form_end(form) }}
", "admin/blog/_form.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\admin\\blog\\_form.html.twig");
    }
}
