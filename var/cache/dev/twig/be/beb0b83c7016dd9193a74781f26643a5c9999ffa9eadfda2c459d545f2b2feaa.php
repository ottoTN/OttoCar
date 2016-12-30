<?php

/* fournisseur/new.html.twig */
class __TwigTemplate_7d9d231e49c4f2722fa49b36b2542527346c37ddf19ad6e97135591660eb90de extends Twig_Template
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
        $__internal_56d8ff9cd56cd0c27713147e2034fa718ead22afea0687492c2b0a67b4134bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d8ff9cd56cd0c27713147e2034fa718ead22afea0687492c2b0a67b4134bbf->enter($__internal_56d8ff9cd56cd0c27713147e2034fa718ead22afea0687492c2b0a67b4134bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $__internal_f182358e2e09a96bacb8b34f10b80a462963eea5c0183cb1c9621bb519ac0ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f182358e2e09a96bacb8b34f10b80a462963eea5c0183cb1c9621bb519ac0ee6->enter($__internal_f182358e2e09a96bacb8b34f10b80a462963eea5c0183cb1c9621bb519ac0ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56d8ff9cd56cd0c27713147e2034fa718ead22afea0687492c2b0a67b4134bbf->leave($__internal_56d8ff9cd56cd0c27713147e2034fa718ead22afea0687492c2b0a67b4134bbf_prof);

        
        $__internal_f182358e2e09a96bacb8b34f10b80a462963eea5c0183cb1c9621bb519ac0ee6->leave($__internal_f182358e2e09a96bacb8b34f10b80a462963eea5c0183cb1c9621bb519ac0ee6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59f3340abdf45eb7da40d20f57854d4c5efcc568ffd92cf4edc21a55a88c7594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f3340abdf45eb7da40d20f57854d4c5efcc568ffd92cf4edc21a55a88c7594->enter($__internal_59f3340abdf45eb7da40d20f57854d4c5efcc568ffd92cf4edc21a55a88c7594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53b4ec1cff74c84b345d1e3cd0ce69c9f3055a0c38c2608f19def64638d3f89e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b4ec1cff74c84b345d1e3cd0ce69c9f3055a0c38c2608f19def64638d3f89e->enter($__internal_53b4ec1cff74c84b345d1e3cd0ce69c9f3055a0c38c2608f19def64638d3f89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_53b4ec1cff74c84b345d1e3cd0ce69c9f3055a0c38c2608f19def64638d3f89e->leave($__internal_53b4ec1cff74c84b345d1e3cd0ce69c9f3055a0c38c2608f19def64638d3f89e_prof);

        
        $__internal_59f3340abdf45eb7da40d20f57854d4c5efcc568ffd92cf4edc21a55a88c7594->leave($__internal_59f3340abdf45eb7da40d20f57854d4c5efcc568ffd92cf4edc21a55a88c7594_prof);

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
", "fournisseur/new.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\fournisseur\\new.html.twig");
    }
}
