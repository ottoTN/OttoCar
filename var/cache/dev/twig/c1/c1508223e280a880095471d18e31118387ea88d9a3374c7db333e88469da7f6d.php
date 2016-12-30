<?php

/* ::base.html.twig */
class __TwigTemplate_0bcf389a24e1b35345e733e0d1829002c946d3373006172e1d5f254cedc0fc33 extends Twig_Template
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
        $__internal_8901b02574e768f74c9185a2693fb2bf03317c3be43509de2f6ea24d65a4cbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8901b02574e768f74c9185a2693fb2bf03317c3be43509de2f6ea24d65a4cbe5->enter($__internal_8901b02574e768f74c9185a2693fb2bf03317c3be43509de2f6ea24d65a4cbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_17ebe92dfe9fc10dee7f7d151ff23be588d3e4ce01953f5e710ff236ed3588f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ebe92dfe9fc10dee7f7d151ff23be588d3e4ce01953f5e710ff236ed3588f9->enter($__internal_17ebe92dfe9fc10dee7f7d151ff23be588d3e4ce01953f5e710ff236ed3588f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8901b02574e768f74c9185a2693fb2bf03317c3be43509de2f6ea24d65a4cbe5->leave($__internal_8901b02574e768f74c9185a2693fb2bf03317c3be43509de2f6ea24d65a4cbe5_prof);

        
        $__internal_17ebe92dfe9fc10dee7f7d151ff23be588d3e4ce01953f5e710ff236ed3588f9->leave($__internal_17ebe92dfe9fc10dee7f7d151ff23be588d3e4ce01953f5e710ff236ed3588f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e957d857f06a520693630202e450236b6f9d221f35602ffcced101f828ac26f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e957d857f06a520693630202e450236b6f9d221f35602ffcced101f828ac26f->enter($__internal_7e957d857f06a520693630202e450236b6f9d221f35602ffcced101f828ac26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bde4ca75da84d433aa4a2f916e740b60f3bbf9edd66a20506bdacd4294f2d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bde4ca75da84d433aa4a2f916e740b60f3bbf9edd66a20506bdacd4294f2d7a->enter($__internal_1bde4ca75da84d433aa4a2f916e740b60f3bbf9edd66a20506bdacd4294f2d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1bde4ca75da84d433aa4a2f916e740b60f3bbf9edd66a20506bdacd4294f2d7a->leave($__internal_1bde4ca75da84d433aa4a2f916e740b60f3bbf9edd66a20506bdacd4294f2d7a_prof);

        
        $__internal_7e957d857f06a520693630202e450236b6f9d221f35602ffcced101f828ac26f->leave($__internal_7e957d857f06a520693630202e450236b6f9d221f35602ffcced101f828ac26f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdfb4844b22136a6d64c29717278acd4336e759c6adbd92319ed871db0490188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdfb4844b22136a6d64c29717278acd4336e759c6adbd92319ed871db0490188->enter($__internal_bdfb4844b22136a6d64c29717278acd4336e759c6adbd92319ed871db0490188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_30cef1db68ae6eda22e5fc72a8ed01d96e849405ccfdd47e454aa6a1279a284c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30cef1db68ae6eda22e5fc72a8ed01d96e849405ccfdd47e454aa6a1279a284c->enter($__internal_30cef1db68ae6eda22e5fc72a8ed01d96e849405ccfdd47e454aa6a1279a284c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_30cef1db68ae6eda22e5fc72a8ed01d96e849405ccfdd47e454aa6a1279a284c->leave($__internal_30cef1db68ae6eda22e5fc72a8ed01d96e849405ccfdd47e454aa6a1279a284c_prof);

        
        $__internal_bdfb4844b22136a6d64c29717278acd4336e759c6adbd92319ed871db0490188->leave($__internal_bdfb4844b22136a6d64c29717278acd4336e759c6adbd92319ed871db0490188_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_57a1509028c51e75e0ffd1e608325439e54a587221495c3ba4bdbeac832d8184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a1509028c51e75e0ffd1e608325439e54a587221495c3ba4bdbeac832d8184->enter($__internal_57a1509028c51e75e0ffd1e608325439e54a587221495c3ba4bdbeac832d8184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8df221169af56a718e572489c9b2f383054a05d501bb1ad0f5069fb424d4d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8df221169af56a718e572489c9b2f383054a05d501bb1ad0f5069fb424d4d46->enter($__internal_a8df221169af56a718e572489c9b2f383054a05d501bb1ad0f5069fb424d4d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8df221169af56a718e572489c9b2f383054a05d501bb1ad0f5069fb424d4d46->leave($__internal_a8df221169af56a718e572489c9b2f383054a05d501bb1ad0f5069fb424d4d46_prof);

        
        $__internal_57a1509028c51e75e0ffd1e608325439e54a587221495c3ba4bdbeac832d8184->leave($__internal_57a1509028c51e75e0ffd1e608325439e54a587221495c3ba4bdbeac832d8184_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb18673109eceba3f8e6d5f91d8a6625d4406332c5271e08d74cee6f8dae7661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb18673109eceba3f8e6d5f91d8a6625d4406332c5271e08d74cee6f8dae7661->enter($__internal_eb18673109eceba3f8e6d5f91d8a6625d4406332c5271e08d74cee6f8dae7661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_826a906e5956757f55b49c2a71f6a824ee1161673f3400f9f87f6e0af9ce47b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826a906e5956757f55b49c2a71f6a824ee1161673f3400f9f87f6e0af9ce47b3->enter($__internal_826a906e5956757f55b49c2a71f6a824ee1161673f3400f9f87f6e0af9ce47b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_826a906e5956757f55b49c2a71f6a824ee1161673f3400f9f87f6e0af9ce47b3->leave($__internal_826a906e5956757f55b49c2a71f6a824ee1161673f3400f9f87f6e0af9ce47b3_prof);

        
        $__internal_eb18673109eceba3f8e6d5f91d8a6625d4406332c5271e08d74cee6f8dae7661->leave($__internal_eb18673109eceba3f8e6d5f91d8a6625d4406332c5271e08d74cee6f8dae7661_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\app/Resources\\views/base.html.twig");
    }
}
