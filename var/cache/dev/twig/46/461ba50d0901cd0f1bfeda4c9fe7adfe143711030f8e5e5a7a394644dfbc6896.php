<?php

/* base.html.twig */
class __TwigTemplate_244aea183d53454ce690bc644dc395b1c2cf5a9f8d79e75fc4b08870b766e9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5788d7012b71462207e48f1a86e0e83d04076d8c246a97eed8a9a10b1c8d981c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5788d7012b71462207e48f1a86e0e83d04076d8c246a97eed8a9a10b1c8d981c->enter($__internal_5788d7012b71462207e48f1a86e0e83d04076d8c246a97eed8a9a10b1c8d981c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9238318798bc628f3f66938fb44b42e329b619c584ce1ba44c26ab37fbbaacb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9238318798bc628f3f66938fb44b42e329b619c584ce1ba44c26ab37fbbaacb1->enter($__internal_9238318798bc628f3f66938fb44b42e329b619c584ce1ba44c26ab37fbbaacb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5788d7012b71462207e48f1a86e0e83d04076d8c246a97eed8a9a10b1c8d981c->leave($__internal_5788d7012b71462207e48f1a86e0e83d04076d8c246a97eed8a9a10b1c8d981c_prof);

        
        $__internal_9238318798bc628f3f66938fb44b42e329b619c584ce1ba44c26ab37fbbaacb1->leave($__internal_9238318798bc628f3f66938fb44b42e329b619c584ce1ba44c26ab37fbbaacb1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0362501f01a7aa694c45e7c4f433b42f2d4c7db6c59f1a684adcf600b30baeff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0362501f01a7aa694c45e7c4f433b42f2d4c7db6c59f1a684adcf600b30baeff->enter($__internal_0362501f01a7aa694c45e7c4f433b42f2d4c7db6c59f1a684adcf600b30baeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ce66191f3105cc533bfabe15867aff69f4591fa79e76025d61d314f45e03555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce66191f3105cc533bfabe15867aff69f4591fa79e76025d61d314f45e03555->enter($__internal_9ce66191f3105cc533bfabe15867aff69f4591fa79e76025d61d314f45e03555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9ce66191f3105cc533bfabe15867aff69f4591fa79e76025d61d314f45e03555->leave($__internal_9ce66191f3105cc533bfabe15867aff69f4591fa79e76025d61d314f45e03555_prof);

        
        $__internal_0362501f01a7aa694c45e7c4f433b42f2d4c7db6c59f1a684adcf600b30baeff->leave($__internal_0362501f01a7aa694c45e7c4f433b42f2d4c7db6c59f1a684adcf600b30baeff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37b6c0327b625507925c91b102f6fab39978e989b6db993466b2bdfb5cce2a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b6c0327b625507925c91b102f6fab39978e989b6db993466b2bdfb5cce2a56->enter($__internal_37b6c0327b625507925c91b102f6fab39978e989b6db993466b2bdfb5cce2a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0853a401b941bf6a249367b20568cd4698769e584aa880add9e4cfef24e77154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0853a401b941bf6a249367b20568cd4698769e584aa880add9e4cfef24e77154->enter($__internal_0853a401b941bf6a249367b20568cd4698769e584aa880add9e4cfef24e77154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0853a401b941bf6a249367b20568cd4698769e584aa880add9e4cfef24e77154->leave($__internal_0853a401b941bf6a249367b20568cd4698769e584aa880add9e4cfef24e77154_prof);

        
        $__internal_37b6c0327b625507925c91b102f6fab39978e989b6db993466b2bdfb5cce2a56->leave($__internal_37b6c0327b625507925c91b102f6fab39978e989b6db993466b2bdfb5cce2a56_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e56363690313f81496a59e53c0dd454bc9bec458dee44002870377b2b414be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e56363690313f81496a59e53c0dd454bc9bec458dee44002870377b2b414be3->enter($__internal_9e56363690313f81496a59e53c0dd454bc9bec458dee44002870377b2b414be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1513cec4b4032572222246be8015b8824ff59d9e7a2faa972ec397031f56f417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1513cec4b4032572222246be8015b8824ff59d9e7a2faa972ec397031f56f417->enter($__internal_1513cec4b4032572222246be8015b8824ff59d9e7a2faa972ec397031f56f417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1513cec4b4032572222246be8015b8824ff59d9e7a2faa972ec397031f56f417->leave($__internal_1513cec4b4032572222246be8015b8824ff59d9e7a2faa972ec397031f56f417_prof);

        
        $__internal_9e56363690313f81496a59e53c0dd454bc9bec458dee44002870377b2b414be3->leave($__internal_9e56363690313f81496a59e53c0dd454bc9bec458dee44002870377b2b414be3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_624d8db433bbbadac63d5f60355e4360f8b922eb0f24c2fbe45ab3cd9fa488ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624d8db433bbbadac63d5f60355e4360f8b922eb0f24c2fbe45ab3cd9fa488ff->enter($__internal_624d8db433bbbadac63d5f60355e4360f8b922eb0f24c2fbe45ab3cd9fa488ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aac93eeac489eed626b992dedeeaa2987edb27edbcb454d31a3fe2bb698b101b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac93eeac489eed626b992dedeeaa2987edb27edbcb454d31a3fe2bb698b101b->enter($__internal_aac93eeac489eed626b992dedeeaa2987edb27edbcb454d31a3fe2bb698b101b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aac93eeac489eed626b992dedeeaa2987edb27edbcb454d31a3fe2bb698b101b->leave($__internal_aac93eeac489eed626b992dedeeaa2987edb27edbcb454d31a3fe2bb698b101b_prof);

        
        $__internal_624d8db433bbbadac63d5f60355e4360f8b922eb0f24c2fbe45ab3cd9fa488ff->leave($__internal_624d8db433bbbadac63d5f60355e4360f8b922eb0f24c2fbe45ab3cd9fa488ff_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\app\\Resources\\views\\base.html.twig");
    }
}
