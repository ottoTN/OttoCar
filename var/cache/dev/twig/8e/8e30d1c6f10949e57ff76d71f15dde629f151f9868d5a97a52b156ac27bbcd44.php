<?php

/* fiche/new.html.twig */
class __TwigTemplate_7773c8c98b3c56177a44be8dd47aa97838260e56a7cdd06d3a8d0e246d1e77d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/new.html.twig", 1);
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
        $__internal_b82ac4ee7d61f2d662ff06552ef41bbaac5e205955e2a4700198e6012dd1ef06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82ac4ee7d61f2d662ff06552ef41bbaac5e205955e2a4700198e6012dd1ef06->enter($__internal_b82ac4ee7d61f2d662ff06552ef41bbaac5e205955e2a4700198e6012dd1ef06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/new.html.twig"));

        $__internal_18183ff3819cac9b20561593f0e3870b1c4781af12e8f035a06048ff1088c5f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18183ff3819cac9b20561593f0e3870b1c4781af12e8f035a06048ff1088c5f6->enter($__internal_18183ff3819cac9b20561593f0e3870b1c4781af12e8f035a06048ff1088c5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b82ac4ee7d61f2d662ff06552ef41bbaac5e205955e2a4700198e6012dd1ef06->leave($__internal_b82ac4ee7d61f2d662ff06552ef41bbaac5e205955e2a4700198e6012dd1ef06_prof);

        
        $__internal_18183ff3819cac9b20561593f0e3870b1c4781af12e8f035a06048ff1088c5f6->leave($__internal_18183ff3819cac9b20561593f0e3870b1c4781af12e8f035a06048ff1088c5f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_798dd1e294fb90c8dd9302737d69d3890565af339fc01f095cdaecace64aa9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798dd1e294fb90c8dd9302737d69d3890565af339fc01f095cdaecace64aa9a5->enter($__internal_798dd1e294fb90c8dd9302737d69d3890565af339fc01f095cdaecace64aa9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f201ac6828f8ead7dedfd65cfe914c8796d0737e6c171416c738009565456dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f201ac6828f8ead7dedfd65cfe914c8796d0737e6c171416c738009565456dce->enter($__internal_f201ac6828f8ead7dedfd65cfe914c8796d0737e6c171416c738009565456dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiche creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f201ac6828f8ead7dedfd65cfe914c8796d0737e6c171416c738009565456dce->leave($__internal_f201ac6828f8ead7dedfd65cfe914c8796d0737e6c171416c738009565456dce_prof);

        
        $__internal_798dd1e294fb90c8dd9302737d69d3890565af339fc01f095cdaecace64aa9a5->leave($__internal_798dd1e294fb90c8dd9302737d69d3890565af339fc01f095cdaecace64aa9a5_prof);

    }

    public function getTemplateName()
    {
        return "fiche/new.html.twig";
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
    <h1>Fiche creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fiche_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "fiche/new.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\fiche\\new.html.twig");
    }
}
