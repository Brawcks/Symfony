<?php

/* blog/_rss.html.twig */
class __TwigTemplate_9ff50e9d8179d1af5965d75191aa6884e352ba726be65e92b971382ddb258ccb extends Twig_Template
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
        $__internal_41297dc7d53f3163e6482c648d21cfeebf4ea3dcd23cc1350b24b7c2aa2461f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41297dc7d53f3163e6482c648d21cfeebf4ea3dcd23cc1350b24b7c2aa2461f1->enter($__internal_41297dc7d53f3163e6482c648d21cfeebf4ea3dcd23cc1350b24b7c2aa2461f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_rss.html.twig"));

        $__internal_39b937043edc285aa804bc8c98100ffff2f3699c5f880eb87e0861a8dad9ed7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b937043edc285aa804bc8c98100ffff2f3699c5f880eb87e0861a8dad9ed7f->enter($__internal_39b937043edc285aa804bc8c98100ffff2f3699c5f880eb87e0861a8dad9ed7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_rss.html.twig"));

        // line 1
        echo "<div class=\"section rss\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        <i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.rss"), "html", null, true);
        echo "
    </a>
</div>
";
        
        $__internal_41297dc7d53f3163e6482c648d21cfeebf4ea3dcd23cc1350b24b7c2aa2461f1->leave($__internal_41297dc7d53f3163e6482c648d21cfeebf4ea3dcd23cc1350b24b7c2aa2461f1_prof);

        
        $__internal_39b937043edc285aa804bc8c98100ffff2f3699c5f880eb87e0861a8dad9ed7f->leave($__internal_39b937043edc285aa804bc8c98100ffff2f3699c5f880eb87e0861a8dad9ed7f_prof);

    }

    public function getTemplateName()
    {
        return "blog/_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section rss\">
    <a href=\"{{ path('blog_rss') }}\">
        <i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ 'menu.rss'|trans }}
    </a>
</div>
", "blog/_rss.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\blog\\_rss.html.twig");
    }
}
