<?php

/* fiche/edit.html.twig */
class __TwigTemplate_a84d5ef36bb1a1ee9972d290a3e34ef1da5337ad70be902cc9018379c45b53ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/edit.html.twig", 1);
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
        $__internal_f883cce7b489c988a6c7680c44b2b5d966ffe8f79238e3fb95d45b509624ef5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f883cce7b489c988a6c7680c44b2b5d966ffe8f79238e3fb95d45b509624ef5e->enter($__internal_f883cce7b489c988a6c7680c44b2b5d966ffe8f79238e3fb95d45b509624ef5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/edit.html.twig"));

        $__internal_0f4aae8ad31594d6c4a720b7a19cb2a767f558109500c4dabe702a4154a9bd3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4aae8ad31594d6c4a720b7a19cb2a767f558109500c4dabe702a4154a9bd3f->enter($__internal_0f4aae8ad31594d6c4a720b7a19cb2a767f558109500c4dabe702a4154a9bd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f883cce7b489c988a6c7680c44b2b5d966ffe8f79238e3fb95d45b509624ef5e->leave($__internal_f883cce7b489c988a6c7680c44b2b5d966ffe8f79238e3fb95d45b509624ef5e_prof);

        
        $__internal_0f4aae8ad31594d6c4a720b7a19cb2a767f558109500c4dabe702a4154a9bd3f->leave($__internal_0f4aae8ad31594d6c4a720b7a19cb2a767f558109500c4dabe702a4154a9bd3f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ea4571147f0203e770281005b9839656f5281d471f2c706228c99e35c95abc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea4571147f0203e770281005b9839656f5281d471f2c706228c99e35c95abc4->enter($__internal_1ea4571147f0203e770281005b9839656f5281d471f2c706228c99e35c95abc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6eff6b0ba8fbede00c7c0c956334d38fcfacd9b1df28cd0b4790a6974f1c244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6eff6b0ba8fbede00c7c0c956334d38fcfacd9b1df28cd0b4790a6974f1c244->enter($__internal_a6eff6b0ba8fbede00c7c0c956334d38fcfacd9b1df28cd0b4790a6974f1c244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiche edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_index");
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
        
        $__internal_a6eff6b0ba8fbede00c7c0c956334d38fcfacd9b1df28cd0b4790a6974f1c244->leave($__internal_a6eff6b0ba8fbede00c7c0c956334d38fcfacd9b1df28cd0b4790a6974f1c244_prof);

        
        $__internal_1ea4571147f0203e770281005b9839656f5281d471f2c706228c99e35c95abc4->leave($__internal_1ea4571147f0203e770281005b9839656f5281d471f2c706228c99e35c95abc4_prof);

    }

    public function getTemplateName()
    {
        return "fiche/edit.html.twig";
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
    <h1>Fiche edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('fiche_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "fiche/edit.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fiche\\edit.html.twig");
    }
}
