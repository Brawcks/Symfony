<?php

/* blog/_post_tags.html.twig */
class __TwigTemplate_7e37ee371469e29732351a16ba5b008a9c2187c477c31c2402a532a510c88e20 extends Twig_Template
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
        $__internal_afe12cc0e60f67c90cd11fca1a984f4e2c731e08729d3d6be8351f8712a505d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe12cc0e60f67c90cd11fca1a984f4e2c731e08729d3d6be8351f8712a505d9->enter($__internal_afe12cc0e60f67c90cd11fca1a984f4e2c731e08729d3d6be8351f8712a505d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_post_tags.html.twig"));

        $__internal_47120e300d2af43bc6ef490aff3b41cc6ad9955d39eca334e2d45d788d7a473d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47120e300d2af43bc6ef490aff3b41cc6ad9955d39eca334e2d45d788d7a473d->enter($__internal_47120e300d2af43bc6ef490aff3b41cc6ad9955d39eca334e2d45d788d7a473d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_post_tags.html.twig"));

        // line 1
        if ( !$this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "tags", array()), "empty", array())) {
            // line 2
            echo "    <p class=\"post-tags\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 4
                echo "            <span class=\"label label-default\">
                <i class=\"fa fa-tag\"></i> ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "
            </span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </p>
";
        }
        // line 10
        echo "
";
        
        $__internal_afe12cc0e60f67c90cd11fca1a984f4e2c731e08729d3d6be8351f8712a505d9->leave($__internal_afe12cc0e60f67c90cd11fca1a984f4e2c731e08729d3d6be8351f8712a505d9_prof);

        
        $__internal_47120e300d2af43bc6ef490aff3b41cc6ad9955d39eca334e2d45d788d7a473d->leave($__internal_47120e300d2af43bc6ef490aff3b41cc6ad9955d39eca334e2d45d788d7a473d_prof);

    }

    public function getTemplateName()
    {
        return "blog/_post_tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  46 => 8,  37 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not post.tags.empty %}
    <p class=\"post-tags\">
        {% for tag in post.tags %}
            <span class=\"label label-default\">
                <i class=\"fa fa-tag\"></i> {{ tag.name }}
            </span>
        {% endfor %}
    </p>
{% endif %}

", "blog/_post_tags.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\blog\\_post_tags.html.twig");
    }
}
