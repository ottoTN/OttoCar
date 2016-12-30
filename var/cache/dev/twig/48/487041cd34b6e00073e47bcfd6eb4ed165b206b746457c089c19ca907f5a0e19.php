<?php

/* fiche/new.html.twig */
class __TwigTemplate_0caa033cf9981bc69525c599727487478e41b540f5a4d233d884201e0e82bc34 extends Twig_Template
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
        $__internal_e35915a666d91ea9b956fedb896e9b8893e63cafc63a7c3ceb4547900c806eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35915a666d91ea9b956fedb896e9b8893e63cafc63a7c3ceb4547900c806eb0->enter($__internal_e35915a666d91ea9b956fedb896e9b8893e63cafc63a7c3ceb4547900c806eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/new.html.twig"));

        $__internal_15721050a9149920e0ed7900e0bd5c327acb025073b3e71f1833f386845b2c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15721050a9149920e0ed7900e0bd5c327acb025073b3e71f1833f386845b2c66->enter($__internal_15721050a9149920e0ed7900e0bd5c327acb025073b3e71f1833f386845b2c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e35915a666d91ea9b956fedb896e9b8893e63cafc63a7c3ceb4547900c806eb0->leave($__internal_e35915a666d91ea9b956fedb896e9b8893e63cafc63a7c3ceb4547900c806eb0_prof);

        
        $__internal_15721050a9149920e0ed7900e0bd5c327acb025073b3e71f1833f386845b2c66->leave($__internal_15721050a9149920e0ed7900e0bd5c327acb025073b3e71f1833f386845b2c66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2afed9bd99896940874a5660a42633438ab07046afec6b4bd99807becb6771e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2afed9bd99896940874a5660a42633438ab07046afec6b4bd99807becb6771e7->enter($__internal_2afed9bd99896940874a5660a42633438ab07046afec6b4bd99807becb6771e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11a7f718bf27e131f2bcbf038d6f9f88339138a578269a58fcb42dfe2d90c110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a7f718bf27e131f2bcbf038d6f9f88339138a578269a58fcb42dfe2d90c110->enter($__internal_11a7f718bf27e131f2bcbf038d6f9f88339138a578269a58fcb42dfe2d90c110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_11a7f718bf27e131f2bcbf038d6f9f88339138a578269a58fcb42dfe2d90c110->leave($__internal_11a7f718bf27e131f2bcbf038d6f9f88339138a578269a58fcb42dfe2d90c110_prof);

        
        $__internal_2afed9bd99896940874a5660a42633438ab07046afec6b4bd99807becb6771e7->leave($__internal_2afed9bd99896940874a5660a42633438ab07046afec6b4bd99807becb6771e7_prof);

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
", "fiche/new.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\fiche\\new.html.twig");
    }
}
