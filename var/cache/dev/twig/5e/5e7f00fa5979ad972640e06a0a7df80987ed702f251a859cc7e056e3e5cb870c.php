<?php

/* compte/new.html.twig */
class __TwigTemplate_52cb30156cbf75b1a383b452e34a985b5406866ce380de5fbca04017362755ad extends Twig_Template
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
        $__internal_f845dcc4060f5885dca9736968ee99a6188aee4ac2d79e4e6191f131fe45100c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f845dcc4060f5885dca9736968ee99a6188aee4ac2d79e4e6191f131fe45100c->enter($__internal_f845dcc4060f5885dca9736968ee99a6188aee4ac2d79e4e6191f131fe45100c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/new.html.twig"));

        $__internal_c5a97fe39bea244b3e22d5f40e82be91f4767bacb7092c7129d53b42967abbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a97fe39bea244b3e22d5f40e82be91f4767bacb7092c7129d53b42967abbf1->enter($__internal_c5a97fe39bea244b3e22d5f40e82be91f4767bacb7092c7129d53b42967abbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f845dcc4060f5885dca9736968ee99a6188aee4ac2d79e4e6191f131fe45100c->leave($__internal_f845dcc4060f5885dca9736968ee99a6188aee4ac2d79e4e6191f131fe45100c_prof);

        
        $__internal_c5a97fe39bea244b3e22d5f40e82be91f4767bacb7092c7129d53b42967abbf1->leave($__internal_c5a97fe39bea244b3e22d5f40e82be91f4767bacb7092c7129d53b42967abbf1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38423bd8240f7630837b6a151c2bb76d7cf54545c4dc7ec7e3621cde308ee7b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38423bd8240f7630837b6a151c2bb76d7cf54545c4dc7ec7e3621cde308ee7b3->enter($__internal_38423bd8240f7630837b6a151c2bb76d7cf54545c4dc7ec7e3621cde308ee7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_474525ea967676fd0d03c82bde5f35b0bd919bcb4522767fedf7a635ad3a715c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474525ea967676fd0d03c82bde5f35b0bd919bcb4522767fedf7a635ad3a715c->enter($__internal_474525ea967676fd0d03c82bde5f35b0bd919bcb4522767fedf7a635ad3a715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_474525ea967676fd0d03c82bde5f35b0bd919bcb4522767fedf7a635ad3a715c->leave($__internal_474525ea967676fd0d03c82bde5f35b0bd919bcb4522767fedf7a635ad3a715c_prof);

        
        $__internal_38423bd8240f7630837b6a151c2bb76d7cf54545c4dc7ec7e3621cde308ee7b3->leave($__internal_38423bd8240f7630837b6a151c2bb76d7cf54545c4dc7ec7e3621cde308ee7b3_prof);

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
", "compte/new.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\compte\\new.html.twig");
    }
}
