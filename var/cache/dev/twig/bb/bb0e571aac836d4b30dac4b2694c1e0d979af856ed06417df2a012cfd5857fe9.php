<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_270efbe0e9ae95ad6aa8ce5a21a2dca7bfdbe80d3346c1f308636c465e6ff500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3aaec2ea28ad392fb0aac98544654a93c0793cb7d3ab90386ccb2002b74b906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3aaec2ea28ad392fb0aac98544654a93c0793cb7d3ab90386ccb2002b74b906->enter($__internal_b3aaec2ea28ad392fb0aac98544654a93c0793cb7d3ab90386ccb2002b74b906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4f5fbe7aed83cab25e7539001dfd1733df89530e99a36465b32e3603d2e8a7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5fbe7aed83cab25e7539001dfd1733df89530e99a36465b32e3603d2e8a7ab->enter($__internal_4f5fbe7aed83cab25e7539001dfd1733df89530e99a36465b32e3603d2e8a7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3aaec2ea28ad392fb0aac98544654a93c0793cb7d3ab90386ccb2002b74b906->leave($__internal_b3aaec2ea28ad392fb0aac98544654a93c0793cb7d3ab90386ccb2002b74b906_prof);

        
        $__internal_4f5fbe7aed83cab25e7539001dfd1733df89530e99a36465b32e3603d2e8a7ab->leave($__internal_4f5fbe7aed83cab25e7539001dfd1733df89530e99a36465b32e3603d2e8a7ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ee52c37afdcb29fb6cb3b596c5198209647079c49c168f3d17cf4bd6855cb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee52c37afdcb29fb6cb3b596c5198209647079c49c168f3d17cf4bd6855cb60->enter($__internal_1ee52c37afdcb29fb6cb3b596c5198209647079c49c168f3d17cf4bd6855cb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a59f1043616e791a99b4c9b89a8008af66db2905ce4dcb9ed445c79ec87b8313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59f1043616e791a99b4c9b89a8008af66db2905ce4dcb9ed445c79ec87b8313->enter($__internal_a59f1043616e791a99b4c9b89a8008af66db2905ce4dcb9ed445c79ec87b8313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a59f1043616e791a99b4c9b89a8008af66db2905ce4dcb9ed445c79ec87b8313->leave($__internal_a59f1043616e791a99b4c9b89a8008af66db2905ce4dcb9ed445c79ec87b8313_prof);

        
        $__internal_1ee52c37afdcb29fb6cb3b596c5198209647079c49c168f3d17cf4bd6855cb60->leave($__internal_1ee52c37afdcb29fb6cb3b596c5198209647079c49c168f3d17cf4bd6855cb60_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_966168e8b61e2433d402e8f5e535e0459c7533a7fbe3a59b3785d4266f98299d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_966168e8b61e2433d402e8f5e535e0459c7533a7fbe3a59b3785d4266f98299d->enter($__internal_966168e8b61e2433d402e8f5e535e0459c7533a7fbe3a59b3785d4266f98299d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6277665777aca6345e95ddd6dff9825128d49c55c8fa0e911f39ae609724f7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6277665777aca6345e95ddd6dff9825128d49c55c8fa0e911f39ae609724f7e4->enter($__internal_6277665777aca6345e95ddd6dff9825128d49c55c8fa0e911f39ae609724f7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6277665777aca6345e95ddd6dff9825128d49c55c8fa0e911f39ae609724f7e4->leave($__internal_6277665777aca6345e95ddd6dff9825128d49c55c8fa0e911f39ae609724f7e4_prof);

        
        $__internal_966168e8b61e2433d402e8f5e535e0459c7533a7fbe3a59b3785d4266f98299d->leave($__internal_966168e8b61e2433d402e8f5e535e0459c7533a7fbe3a59b3785d4266f98299d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
