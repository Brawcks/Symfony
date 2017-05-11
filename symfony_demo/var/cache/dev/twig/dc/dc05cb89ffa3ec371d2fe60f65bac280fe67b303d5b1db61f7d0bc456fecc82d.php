<?php

/* admin/blog/new.html.twig */
class __TwigTemplate_0391c2e186206b3ee9e8bd802e067e95d82e77266e69534db3f3fcd20768efae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/new.html.twig", 1);
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
        $__internal_e870e84815a5e312988a4e17bcd04b07a19b2b238b58d75ad96bbdced93f0ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e870e84815a5e312988a4e17bcd04b07a19b2b238b58d75ad96bbdced93f0ed0->enter($__internal_e870e84815a5e312988a4e17bcd04b07a19b2b238b58d75ad96bbdced93f0ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/new.html.twig"));

        $__internal_c3161d1ddd0bcdfb2f54f3a57996dc1ea67cfaa15f02f329d6fe15b1dabd2c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3161d1ddd0bcdfb2f54f3a57996dc1ea67cfaa15f02f329d6fe15b1dabd2c7a->enter($__internal_c3161d1ddd0bcdfb2f54f3a57996dc1ea67cfaa15f02f329d6fe15b1dabd2c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e870e84815a5e312988a4e17bcd04b07a19b2b238b58d75ad96bbdced93f0ed0->leave($__internal_e870e84815a5e312988a4e17bcd04b07a19b2b238b58d75ad96bbdced93f0ed0_prof);

        
        $__internal_c3161d1ddd0bcdfb2f54f3a57996dc1ea67cfaa15f02f329d6fe15b1dabd2c7a->leave($__internal_c3161d1ddd0bcdfb2f54f3a57996dc1ea67cfaa15f02f329d6fe15b1dabd2c7a_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8d9309a28f770ebdd5f5321991a858500a3bb1861197e3804c335a181791454d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9309a28f770ebdd5f5321991a858500a3bb1861197e3804c335a181791454d->enter($__internal_8d9309a28f770ebdd5f5321991a858500a3bb1861197e3804c335a181791454d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_5f538006016526cc1883a52ad92073a348f8f8005e2755bd33fe0b01b4f7cc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f538006016526cc1883a52ad92073a348f8f8005e2755bd33fe0b01b4f7cc02->enter($__internal_5f538006016526cc1883a52ad92073a348f8f8005e2755bd33fe0b01b4f7cc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_new";
        
        $__internal_5f538006016526cc1883a52ad92073a348f8f8005e2755bd33fe0b01b4f7cc02->leave($__internal_5f538006016526cc1883a52ad92073a348f8f8005e2755bd33fe0b01b4f7cc02_prof);

        
        $__internal_8d9309a28f770ebdd5f5321991a858500a3bb1861197e3804c335a181791454d->leave($__internal_8d9309a28f770ebdd5f5321991a858500a3bb1861197e3804c335a181791454d_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_adb7d598c413b49bc55b031a05a500c101a142568e265c14e3608e320690f3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb7d598c413b49bc55b031a05a500c101a142568e265c14e3608e320690f3b2->enter($__internal_adb7d598c413b49bc55b031a05a500c101a142568e265c14e3608e320690f3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c6c908109e42cd529066d089ee4bdb8513e086d2291074e4c893864d8b4d5867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c908109e42cd529066d089ee4bdb8513e086d2291074e4c893864d8b4d5867->enter($__internal_c6c908109e42cd529066d089ee4bdb8513e086d2291074e4c893864d8b4d5867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.post_new"), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "summary", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "publishedAt", array()), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tags", array()), 'row');
        echo "

        <input type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.create_post"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saveAndCreateNew", array()), 'widget', array("label" => "label.save_and_create_new", "attr" => array("class" => "btn btn-primary")));
        echo "
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
        echo "\" class=\"btn btn-link\">
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.back_to_list"), "html", null, true);
        echo "
        </a>
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_c6c908109e42cd529066d089ee4bdb8513e086d2291074e4c893864d8b4d5867->leave($__internal_c6c908109e42cd529066d089ee4bdb8513e086d2291074e4c893864d8b4d5867_prof);

        
        $__internal_adb7d598c413b49bc55b031a05a500c101a142568e265c14e3608e320690f3b2->leave($__internal_adb7d598c413b49bc55b031a05a500c101a142568e265c14e3608e320690f3b2_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e7905270d236e6b6df6a956e7c618ea910bc4be7ea00a1061d5abd059f713805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7905270d236e6b6df6a956e7c618ea910bc4be7ea00a1061d5abd059f713805->enter($__internal_e7905270d236e6b6df6a956e7c618ea910bc4be7ea00a1061d5abd059f713805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_18485e3e28c555b86338e6616a916ca478a709124b8b809dd63e705fb434a624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18485e3e28c555b86338e6616a916ca478a709124b8b809dd63e705fb434a624->enter($__internal_18485e3e28c555b86338e6616a916ca478a709124b8b809dd63e705fb434a624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 26
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_18485e3e28c555b86338e6616a916ca478a709124b8b809dd63e705fb434a624->leave($__internal_18485e3e28c555b86338e6616a916ca478a709124b8b809dd63e705fb434a624_prof);

        
        $__internal_e7905270d236e6b6df6a956e7c618ea910bc4be7ea00a1061d5abd059f713805->leave($__internal_e7905270d236e6b6df6a956e7c618ea910bc4be7ea00a1061d5abd059f713805_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 26,  138 => 24,  129 => 23,  117 => 20,  112 => 18,  108 => 17,  104 => 16,  100 => 15,  95 => 13,  91 => 12,  87 => 11,  83 => 10,  79 => 9,  75 => 8,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block body_id 'admin_post_new' %}

{% block main %}
    <h1>{{ 'title.post_new'|trans }}</h1>

    {{ form_start(form) }}
        {{ form_row(form.title) }}
        {{ form_row(form.summary) }}
        {{ form_row(form.content) }}
        {{ form_row(form.publishedAt) }}
        {{ form_row(form.tags) }}

        <input type=\"submit\" value=\"{{ 'label.create_post'|trans }}\" class=\"btn btn-primary\" />
        {{ form_widget(form.saveAndCreateNew, {label: 'label.save_and_create_new', attr: {class: 'btn btn-primary'}}) }}
        <a href=\"{{ path('admin_post_index') }}\" class=\"btn btn-link\">
            {{ 'action.back_to_list'|trans }}
        </a>
    {{ form_end(form) }}
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/new.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\admin\\blog\\new.html.twig");
    }
}
