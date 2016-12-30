<?php

/* facture/new.html.twig */
class __TwigTemplate_a8cf26eea94f4b4bfeaa81d94ee41798bd720f286bf11ad8da9d26c42e59910b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "facture/new.html.twig", 1);
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
        $__internal_d3e32e965e753eabe90d162bbd6e90a9ca0418b27352d858710fdc3faac4fcf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e32e965e753eabe90d162bbd6e90a9ca0418b27352d858710fdc3faac4fcf5->enter($__internal_d3e32e965e753eabe90d162bbd6e90a9ca0418b27352d858710fdc3faac4fcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/new.html.twig"));

        $__internal_38d3a78e6bd5fa0a9660c7faffb3dc304994c4dcd48f7d108b5c14c942641c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d3a78e6bd5fa0a9660c7faffb3dc304994c4dcd48f7d108b5c14c942641c7f->enter($__internal_38d3a78e6bd5fa0a9660c7faffb3dc304994c4dcd48f7d108b5c14c942641c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e32e965e753eabe90d162bbd6e90a9ca0418b27352d858710fdc3faac4fcf5->leave($__internal_d3e32e965e753eabe90d162bbd6e90a9ca0418b27352d858710fdc3faac4fcf5_prof);

        
        $__internal_38d3a78e6bd5fa0a9660c7faffb3dc304994c4dcd48f7d108b5c14c942641c7f->leave($__internal_38d3a78e6bd5fa0a9660c7faffb3dc304994c4dcd48f7d108b5c14c942641c7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_665c1e547c5c7c5549ce2d48071babff4c222690e4f7d42b5fdde258703546fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665c1e547c5c7c5549ce2d48071babff4c222690e4f7d42b5fdde258703546fc->enter($__internal_665c1e547c5c7c5549ce2d48071babff4c222690e4f7d42b5fdde258703546fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3afd1d6cc315c721d0b70732b37b88732bae5f42c63b5e467f5a586120241ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afd1d6cc315c721d0b70732b37b88732bae5f42c63b5e467f5a586120241ff6->enter($__internal_3afd1d6cc315c721d0b70732b37b88732bae5f42c63b5e467f5a586120241ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Facture creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3afd1d6cc315c721d0b70732b37b88732bae5f42c63b5e467f5a586120241ff6->leave($__internal_3afd1d6cc315c721d0b70732b37b88732bae5f42c63b5e467f5a586120241ff6_prof);

        
        $__internal_665c1e547c5c7c5549ce2d48071babff4c222690e4f7d42b5fdde258703546fc->leave($__internal_665c1e547c5c7c5549ce2d48071babff4c222690e4f7d42b5fdde258703546fc_prof);

    }

    public function getTemplateName()
    {
        return "facture/new.html.twig";
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
    <h1>Facture creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('facture_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "facture/new.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\facture\\new.html.twig");
    }
}
