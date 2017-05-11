<?php

/* form/layout.html.twig */
class __TwigTemplate_ad7f8d8a26c5657619e6ba405c0998851a39907b1a2ece4e7f5d6a1f3c96f370 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_layout.html.twig", "form/layout.html.twig", 1);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_444ad33947637f9c3d66a8510f8a86889df0b7440827fcfe856d81739d5e2ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_444ad33947637f9c3d66a8510f8a86889df0b7440827fcfe856d81739d5e2ad8->enter($__internal_444ad33947637f9c3d66a8510f8a86889df0b7440827fcfe856d81739d5e2ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/layout.html.twig"));

        $__internal_8638a394c4c564df41127a0fffeeb05308f1f0b5052013fb59475960fdf00aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8638a394c4c564df41127a0fffeeb05308f1f0b5052013fb59475960fdf00aec->enter($__internal_8638a394c4c564df41127a0fffeeb05308f1f0b5052013fb59475960fdf00aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_444ad33947637f9c3d66a8510f8a86889df0b7440827fcfe856d81739d5e2ad8->leave($__internal_444ad33947637f9c3d66a8510f8a86889df0b7440827fcfe856d81739d5e2ad8_prof);

        
        $__internal_8638a394c4c564df41127a0fffeeb05308f1f0b5052013fb59475960fdf00aec->leave($__internal_8638a394c4c564df41127a0fffeeb05308f1f0b5052013fb59475960fdf00aec_prof);

    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_963fb476ee20b1c64ca48c949a83b9b810a9ee4b19eba0a2af9e854e2a20d03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963fb476ee20b1c64ca48c949a83b9b810a9ee4b19eba0a2af9e854e2a20d03f->enter($__internal_963fb476ee20b1c64ca48c949a83b9b810a9ee4b19eba0a2af9e854e2a20d03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d025c5c4c9634549d075814604395208094a557b92de90f4abb17c3fc2f07c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d025c5c4c9634549d075814604395208094a557b92de90f4abb17c3fc2f07c9b->enter($__internal_d025c5c4c9634549d075814604395208094a557b92de90f4abb17c3fc2f07c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 6
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 7
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 8
            echo "        <ul class=\"list-unstyled\">";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "            <li><span class=\"fa fa-exclamation-triangle\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "</ul>
        ";
            // line 14
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_d025c5c4c9634549d075814604395208094a557b92de90f4abb17c3fc2f07c9b->leave($__internal_d025c5c4c9634549d075814604395208094a557b92de90f4abb17c3fc2f07c9b_prof);

        
        $__internal_963fb476ee20b1c64ca48c949a83b9b810a9ee4b19eba0a2af9e854e2a20d03f->leave($__internal_963fb476ee20b1c64ca48c949a83b9b810a9ee4b19eba0a2af9e854e2a20d03f_prof);

    }

    public function getTemplateName()
    {
        return "form/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  71 => 13,  63 => 11,  59 => 9,  57 => 8,  51 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'bootstrap_3_layout.html.twig' %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
        <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            {# use font-awesome icon library #}
            <li><span class=\"fa fa-exclamation-triangle\"></span> {{ error.message }}</li>
        {%- endfor -%}
        </ul>
        {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "form/layout.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\form\\layout.html.twig");
    }
}
