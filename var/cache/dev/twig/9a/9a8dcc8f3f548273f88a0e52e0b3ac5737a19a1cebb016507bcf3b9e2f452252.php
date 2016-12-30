<?php

/* fournisseur/new.html.twig */
class __TwigTemplate_0479e80902bcd1ac01ea278ad1396a5fc4d7a77ceec9b3bcc9bf3b50debb68fd extends Twig_Template
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
        $__internal_ae0a65797d5317d8ca4d71ca8606e1f679895e957f30b926b8a47c14d753aca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0a65797d5317d8ca4d71ca8606e1f679895e957f30b926b8a47c14d753aca0->enter($__internal_ae0a65797d5317d8ca4d71ca8606e1f679895e957f30b926b8a47c14d753aca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $__internal_d196882f760f3243b0b5cd3e3297c7796204920143eac141d7ffb5da78a04521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d196882f760f3243b0b5cd3e3297c7796204920143eac141d7ffb5da78a04521->enter($__internal_d196882f760f3243b0b5cd3e3297c7796204920143eac141d7ffb5da78a04521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae0a65797d5317d8ca4d71ca8606e1f679895e957f30b926b8a47c14d753aca0->leave($__internal_ae0a65797d5317d8ca4d71ca8606e1f679895e957f30b926b8a47c14d753aca0_prof);

        
        $__internal_d196882f760f3243b0b5cd3e3297c7796204920143eac141d7ffb5da78a04521->leave($__internal_d196882f760f3243b0b5cd3e3297c7796204920143eac141d7ffb5da78a04521_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3a8d78edf5138cc806b0e8795fe95bb6a235437f4f55d686a4832f13ccc0e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a8d78edf5138cc806b0e8795fe95bb6a235437f4f55d686a4832f13ccc0e97->enter($__internal_b3a8d78edf5138cc806b0e8795fe95bb6a235437f4f55d686a4832f13ccc0e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b2c58b66e86f51a2e27f9675a40bd73d33cfbc59cae28cf5c9d67818aa9787c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2c58b66e86f51a2e27f9675a40bd73d33cfbc59cae28cf5c9d67818aa9787c->enter($__internal_7b2c58b66e86f51a2e27f9675a40bd73d33cfbc59cae28cf5c9d67818aa9787c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b2c58b66e86f51a2e27f9675a40bd73d33cfbc59cae28cf5c9d67818aa9787c->leave($__internal_7b2c58b66e86f51a2e27f9675a40bd73d33cfbc59cae28cf5c9d67818aa9787c_prof);

        
        $__internal_b3a8d78edf5138cc806b0e8795fe95bb6a235437f4f55d686a4832f13ccc0e97->leave($__internal_b3a8d78edf5138cc806b0e8795fe95bb6a235437f4f55d686a4832f13ccc0e97_prof);

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
", "fournisseur/new.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\fournisseur\\new.html.twig");
    }
}
