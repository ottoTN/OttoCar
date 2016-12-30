<?php

/* compte/new.html.twig */
class __TwigTemplate_78d93bac110b43bcf5e85c03cb08d4a3d83be81b57a4afe3d338e2aaf2b53ac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbd6ebff125fb3ed1590e4ec6603ded96f9050ad1b7d764ccb7a2b91bde9d9ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd6ebff125fb3ed1590e4ec6603ded96f9050ad1b7d764ccb7a2b91bde9d9ea->enter($__internal_dbd6ebff125fb3ed1590e4ec6603ded96f9050ad1b7d764ccb7a2b91bde9d9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/new.html.twig"));

        $__internal_6eb0266b0a8060b07e7b30e1a1454fe0cdf52fe5ac676847f355989ce49d24c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb0266b0a8060b07e7b30e1a1454fe0cdf52fe5ac676847f355989ce49d24c6->enter($__internal_6eb0266b0a8060b07e7b30e1a1454fe0cdf52fe5ac676847f355989ce49d24c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd6ebff125fb3ed1590e4ec6603ded96f9050ad1b7d764ccb7a2b91bde9d9ea->leave($__internal_dbd6ebff125fb3ed1590e4ec6603ded96f9050ad1b7d764ccb7a2b91bde9d9ea_prof);

        
        $__internal_6eb0266b0a8060b07e7b30e1a1454fe0cdf52fe5ac676847f355989ce49d24c6->leave($__internal_6eb0266b0a8060b07e7b30e1a1454fe0cdf52fe5ac676847f355989ce49d24c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5c3c48324f84b001805be2bc48d5db2b795e07b77061181530f93c829b203fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c3c48324f84b001805be2bc48d5db2b795e07b77061181530f93c829b203fc->enter($__internal_f5c3c48324f84b001805be2bc48d5db2b795e07b77061181530f93c829b203fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_053accdb752b2adcfc9770b06b37f7eeeae578e6f6dda5cae02606b47062fb5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053accdb752b2adcfc9770b06b37f7eeeae578e6f6dda5cae02606b47062fb5d->enter($__internal_053accdb752b2adcfc9770b06b37f7eeeae578e6f6dda5cae02606b47062fb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Compte creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_053accdb752b2adcfc9770b06b37f7eeeae578e6f6dda5cae02606b47062fb5d->leave($__internal_053accdb752b2adcfc9770b06b37f7eeeae578e6f6dda5cae02606b47062fb5d_prof);

        
        $__internal_f5c3c48324f84b001805be2bc48d5db2b795e07b77061181530f93c829b203fc->leave($__internal_f5c3c48324f84b001805be2bc48d5db2b795e07b77061181530f93c829b203fc_prof);

    }

    public function getTemplateName()
    {
        return "compte/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Compte creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('compte_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "compte/new.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\compte\\new.html.twig");
    }
}
