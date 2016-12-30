<?php

/* piece/new.html.twig */
class __TwigTemplate_89c85ac1f3895dead1c11124d0f7488b9aa65171f42e5f0ff9c668bc67e7fd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "piece/new.html.twig", 1);
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
        $__internal_d758c387a2b7ac4bcaee9464ca38f3ad6db9a717b0291b0a73b18e6ccfd6bfa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d758c387a2b7ac4bcaee9464ca38f3ad6db9a717b0291b0a73b18e6ccfd6bfa8->enter($__internal_d758c387a2b7ac4bcaee9464ca38f3ad6db9a717b0291b0a73b18e6ccfd6bfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/new.html.twig"));

        $__internal_de57f546521cf88fcb468bbf824eb4ce80a72acdf0bc69884199233fc6c983f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de57f546521cf88fcb468bbf824eb4ce80a72acdf0bc69884199233fc6c983f3->enter($__internal_de57f546521cf88fcb468bbf824eb4ce80a72acdf0bc69884199233fc6c983f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d758c387a2b7ac4bcaee9464ca38f3ad6db9a717b0291b0a73b18e6ccfd6bfa8->leave($__internal_d758c387a2b7ac4bcaee9464ca38f3ad6db9a717b0291b0a73b18e6ccfd6bfa8_prof);

        
        $__internal_de57f546521cf88fcb468bbf824eb4ce80a72acdf0bc69884199233fc6c983f3->leave($__internal_de57f546521cf88fcb468bbf824eb4ce80a72acdf0bc69884199233fc6c983f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e9536e172544855654750008b562600c5dc9a1bdeea8a29efd4231c2b344eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9536e172544855654750008b562600c5dc9a1bdeea8a29efd4231c2b344eee->enter($__internal_8e9536e172544855654750008b562600c5dc9a1bdeea8a29efd4231c2b344eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d31ea5958075ad5b6dcda53627c465fdc523954e18dea3396fe6c84d4ad28f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d31ea5958075ad5b6dcda53627c465fdc523954e18dea3396fe6c84d4ad28f3->enter($__internal_9d31ea5958075ad5b6dcda53627c465fdc523954e18dea3396fe6c84d4ad28f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Piece creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9d31ea5958075ad5b6dcda53627c465fdc523954e18dea3396fe6c84d4ad28f3->leave($__internal_9d31ea5958075ad5b6dcda53627c465fdc523954e18dea3396fe6c84d4ad28f3_prof);

        
        $__internal_8e9536e172544855654750008b562600c5dc9a1bdeea8a29efd4231c2b344eee->leave($__internal_8e9536e172544855654750008b562600c5dc9a1bdeea8a29efd4231c2b344eee_prof);

    }

    public function getTemplateName()
    {
        return "piece/new.html.twig";
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
    <h1>Piece creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('piece_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "piece/new.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\piece\\new.html.twig");
    }
}
