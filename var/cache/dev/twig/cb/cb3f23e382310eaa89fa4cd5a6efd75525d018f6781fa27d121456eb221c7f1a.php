<?php

/* fournisseur/edit.html.twig */
class __TwigTemplate_6fc3eb5f3b4a858696c3cc69d46eef7dcdd480483a13362f4b154a8e9874f53d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/edit.html.twig", 1);
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
        $__internal_6cdffd129ba47dfabd850adbaf33e5dc63a0f5dd0a0650264b30066905022302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cdffd129ba47dfabd850adbaf33e5dc63a0f5dd0a0650264b30066905022302->enter($__internal_6cdffd129ba47dfabd850adbaf33e5dc63a0f5dd0a0650264b30066905022302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/edit.html.twig"));

        $__internal_3bc88934929e139cb1a0e7d83f4dbc7c2975a1a0f592ff5fb35860a17bcf3ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc88934929e139cb1a0e7d83f4dbc7c2975a1a0f592ff5fb35860a17bcf3ca1->enter($__internal_3bc88934929e139cb1a0e7d83f4dbc7c2975a1a0f592ff5fb35860a17bcf3ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cdffd129ba47dfabd850adbaf33e5dc63a0f5dd0a0650264b30066905022302->leave($__internal_6cdffd129ba47dfabd850adbaf33e5dc63a0f5dd0a0650264b30066905022302_prof);

        
        $__internal_3bc88934929e139cb1a0e7d83f4dbc7c2975a1a0f592ff5fb35860a17bcf3ca1->leave($__internal_3bc88934929e139cb1a0e7d83f4dbc7c2975a1a0f592ff5fb35860a17bcf3ca1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f3d100b6de61f509dd16abedea4be7bbf9f3e6cf28b7b927d23f6681f634eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3d100b6de61f509dd16abedea4be7bbf9f3e6cf28b7b927d23f6681f634eaa->enter($__internal_2f3d100b6de61f509dd16abedea4be7bbf9f3e6cf28b7b927d23f6681f634eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45378b33e1d26b153c0eaa0b378d5a46097b7987c4c5a808c7bce74f085484ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45378b33e1d26b153c0eaa0b378d5a46097b7987c4c5a808c7bce74f085484ea->enter($__internal_45378b33e1d26b153c0eaa0b378d5a46097b7987c4c5a808c7bce74f085484ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fournisseur edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_45378b33e1d26b153c0eaa0b378d5a46097b7987c4c5a808c7bce74f085484ea->leave($__internal_45378b33e1d26b153c0eaa0b378d5a46097b7987c4c5a808c7bce74f085484ea_prof);

        
        $__internal_2f3d100b6de61f509dd16abedea4be7bbf9f3e6cf28b7b927d23f6681f634eaa->leave($__internal_2f3d100b6de61f509dd16abedea4be7bbf9f3e6cf28b7b927d23f6681f634eaa_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Fournisseur edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('fournisseur_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "fournisseur/edit.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\app\\Resources\\views\\fournisseur\\edit.html.twig");
    }
}
