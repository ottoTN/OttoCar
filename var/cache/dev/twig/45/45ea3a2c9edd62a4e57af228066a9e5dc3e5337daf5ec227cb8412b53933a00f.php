<?php

/* fournisseur/new.html.twig */
class __TwigTemplate_fdb5f1a758dc43c817db5690c757eef508d36bd6ade27051bbc9f85209b0c638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/new.html.twig", 1);
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
        $__internal_093f4ef26591e28759bb5ab1f37b8508c5d532a7a0ef9274ee24537233ddd774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093f4ef26591e28759bb5ab1f37b8508c5d532a7a0ef9274ee24537233ddd774->enter($__internal_093f4ef26591e28759bb5ab1f37b8508c5d532a7a0ef9274ee24537233ddd774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $__internal_654eb81ec41d134804c37a9fa991de1d0cc38743709709b0a7cb31aa57533d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654eb81ec41d134804c37a9fa991de1d0cc38743709709b0a7cb31aa57533d25->enter($__internal_654eb81ec41d134804c37a9fa991de1d0cc38743709709b0a7cb31aa57533d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_093f4ef26591e28759bb5ab1f37b8508c5d532a7a0ef9274ee24537233ddd774->leave($__internal_093f4ef26591e28759bb5ab1f37b8508c5d532a7a0ef9274ee24537233ddd774_prof);

        
        $__internal_654eb81ec41d134804c37a9fa991de1d0cc38743709709b0a7cb31aa57533d25->leave($__internal_654eb81ec41d134804c37a9fa991de1d0cc38743709709b0a7cb31aa57533d25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a2407d38ca4b96fea229f1339f47a7bf2ea3e7bdcdbdd68931b99ad98952212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2407d38ca4b96fea229f1339f47a7bf2ea3e7bdcdbdd68931b99ad98952212->enter($__internal_1a2407d38ca4b96fea229f1339f47a7bf2ea3e7bdcdbdd68931b99ad98952212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75fc5be94377ea6b0f05e42c3c19c2e20ac3c64948696bf36cebbf171b58cd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75fc5be94377ea6b0f05e42c3c19c2e20ac3c64948696bf36cebbf171b58cd2f->enter($__internal_75fc5be94377ea6b0f05e42c3c19c2e20ac3c64948696bf36cebbf171b58cd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fournisseur creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_75fc5be94377ea6b0f05e42c3c19c2e20ac3c64948696bf36cebbf171b58cd2f->leave($__internal_75fc5be94377ea6b0f05e42c3c19c2e20ac3c64948696bf36cebbf171b58cd2f_prof);

        
        $__internal_1a2407d38ca4b96fea229f1339f47a7bf2ea3e7bdcdbdd68931b99ad98952212->leave($__internal_1a2407d38ca4b96fea229f1339f47a7bf2ea3e7bdcdbdd68931b99ad98952212_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/new.html.twig";
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
    <h1>Fournisseur creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fournisseur_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "fournisseur/new.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fournisseur\\new.html.twig");
    }
}
