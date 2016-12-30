<?php

/* employe/new.html.twig */
class __TwigTemplate_a872b59ed7a22ca1ac6fe3fde1fc53efaa0cb5df1bab0846e27831a3d20d4846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employe/new.html.twig", 1);
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
        $__internal_72b3a7b20b70686f299fd9c1efc29082be6d81b7499e2d3b0fd046fbb00f21b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b3a7b20b70686f299fd9c1efc29082be6d81b7499e2d3b0fd046fbb00f21b9->enter($__internal_72b3a7b20b70686f299fd9c1efc29082be6d81b7499e2d3b0fd046fbb00f21b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $__internal_c81ece3d468bb6855bc25cb2df761f34bf607f871c6ebafb2a2308708b7f5ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81ece3d468bb6855bc25cb2df761f34bf607f871c6ebafb2a2308708b7f5ba5->enter($__internal_c81ece3d468bb6855bc25cb2df761f34bf607f871c6ebafb2a2308708b7f5ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b3a7b20b70686f299fd9c1efc29082be6d81b7499e2d3b0fd046fbb00f21b9->leave($__internal_72b3a7b20b70686f299fd9c1efc29082be6d81b7499e2d3b0fd046fbb00f21b9_prof);

        
        $__internal_c81ece3d468bb6855bc25cb2df761f34bf607f871c6ebafb2a2308708b7f5ba5->leave($__internal_c81ece3d468bb6855bc25cb2df761f34bf607f871c6ebafb2a2308708b7f5ba5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7753590c02fa43cdfbc12196781bcee2fe5bb12baf79386dbb1bd0b9d6f8895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7753590c02fa43cdfbc12196781bcee2fe5bb12baf79386dbb1bd0b9d6f8895->enter($__internal_f7753590c02fa43cdfbc12196781bcee2fe5bb12baf79386dbb1bd0b9d6f8895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf35cc312f4eb53d3e224249b654ea15cf0501b4121ff8619d189d2e578c66ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf35cc312f4eb53d3e224249b654ea15cf0501b4121ff8619d189d2e578c66ab->enter($__internal_cf35cc312f4eb53d3e224249b654ea15cf0501b4121ff8619d189d2e578c66ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employe creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_cf35cc312f4eb53d3e224249b654ea15cf0501b4121ff8619d189d2e578c66ab->leave($__internal_cf35cc312f4eb53d3e224249b654ea15cf0501b4121ff8619d189d2e578c66ab_prof);

        
        $__internal_f7753590c02fa43cdfbc12196781bcee2fe5bb12baf79386dbb1bd0b9d6f8895->leave($__internal_f7753590c02fa43cdfbc12196781bcee2fe5bb12baf79386dbb1bd0b9d6f8895_prof);

    }

    public function getTemplateName()
    {
        return "employe/new.html.twig";
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
    <h1>Employe creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('employe_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "employe/new.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\employe\\new.html.twig");
    }
}
