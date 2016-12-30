<?php

/* base.html.twig */
class __TwigTemplate_382bffa663df98b75a2004b1f3a6212c11f49c1f06e5f5f286c88864d68c0bbf extends Twig_Template
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
        $__internal_1a8dc29650dbabc5413b33113142de9cffe027032cef91c326ccf0def032bfcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8dc29650dbabc5413b33113142de9cffe027032cef91c326ccf0def032bfcc->enter($__internal_1a8dc29650dbabc5413b33113142de9cffe027032cef91c326ccf0def032bfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ffa56389c670c1b6343ac26dcb413cf54af23d0f3afadff811c5c9658dc1a37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa56389c670c1b6343ac26dcb413cf54af23d0f3afadff811c5c9658dc1a37a->enter($__internal_ffa56389c670c1b6343ac26dcb413cf54af23d0f3afadff811c5c9658dc1a37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1a8dc29650dbabc5413b33113142de9cffe027032cef91c326ccf0def032bfcc->leave($__internal_1a8dc29650dbabc5413b33113142de9cffe027032cef91c326ccf0def032bfcc_prof);

        
        $__internal_ffa56389c670c1b6343ac26dcb413cf54af23d0f3afadff811c5c9658dc1a37a->leave($__internal_ffa56389c670c1b6343ac26dcb413cf54af23d0f3afadff811c5c9658dc1a37a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_02cd50891bf8c710d71bdb0b19f8b12c43d8753efb5707a61fc852764f90a6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cd50891bf8c710d71bdb0b19f8b12c43d8753efb5707a61fc852764f90a6ce->enter($__internal_02cd50891bf8c710d71bdb0b19f8b12c43d8753efb5707a61fc852764f90a6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_061ba604f7e05639579dc2ec1d6b3caad7a74c52a4c3b89bd6b1409cec16cc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061ba604f7e05639579dc2ec1d6b3caad7a74c52a4c3b89bd6b1409cec16cc7c->enter($__internal_061ba604f7e05639579dc2ec1d6b3caad7a74c52a4c3b89bd6b1409cec16cc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_061ba604f7e05639579dc2ec1d6b3caad7a74c52a4c3b89bd6b1409cec16cc7c->leave($__internal_061ba604f7e05639579dc2ec1d6b3caad7a74c52a4c3b89bd6b1409cec16cc7c_prof);

        
        $__internal_02cd50891bf8c710d71bdb0b19f8b12c43d8753efb5707a61fc852764f90a6ce->leave($__internal_02cd50891bf8c710d71bdb0b19f8b12c43d8753efb5707a61fc852764f90a6ce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c4d3fcdb1a9ee88701c5b70ecdef2aea26e763cb79e87835e09ee04029f9e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4d3fcdb1a9ee88701c5b70ecdef2aea26e763cb79e87835e09ee04029f9e2c->enter($__internal_9c4d3fcdb1a9ee88701c5b70ecdef2aea26e763cb79e87835e09ee04029f9e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_239caaf67b83cc502f11711aa9b96826f06fe1907cede367052dc864afa6b476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239caaf67b83cc502f11711aa9b96826f06fe1907cede367052dc864afa6b476->enter($__internal_239caaf67b83cc502f11711aa9b96826f06fe1907cede367052dc864afa6b476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_239caaf67b83cc502f11711aa9b96826f06fe1907cede367052dc864afa6b476->leave($__internal_239caaf67b83cc502f11711aa9b96826f06fe1907cede367052dc864afa6b476_prof);

        
        $__internal_9c4d3fcdb1a9ee88701c5b70ecdef2aea26e763cb79e87835e09ee04029f9e2c->leave($__internal_9c4d3fcdb1a9ee88701c5b70ecdef2aea26e763cb79e87835e09ee04029f9e2c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ece10c5b75bc18324896b7d25107348ae6cbbfde0f8564a63e6d01215cb356f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ece10c5b75bc18324896b7d25107348ae6cbbfde0f8564a63e6d01215cb356f->enter($__internal_2ece10c5b75bc18324896b7d25107348ae6cbbfde0f8564a63e6d01215cb356f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ead2c9138d57b8fee4b29b4da90fe73e1fd2bd9245c86f55a50323c587d61533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead2c9138d57b8fee4b29b4da90fe73e1fd2bd9245c86f55a50323c587d61533->enter($__internal_ead2c9138d57b8fee4b29b4da90fe73e1fd2bd9245c86f55a50323c587d61533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ead2c9138d57b8fee4b29b4da90fe73e1fd2bd9245c86f55a50323c587d61533->leave($__internal_ead2c9138d57b8fee4b29b4da90fe73e1fd2bd9245c86f55a50323c587d61533_prof);

        
        $__internal_2ece10c5b75bc18324896b7d25107348ae6cbbfde0f8564a63e6d01215cb356f->leave($__internal_2ece10c5b75bc18324896b7d25107348ae6cbbfde0f8564a63e6d01215cb356f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2c5704a1070f00a19b85f1bf8ccaae3b730362c4cfe521018df947b8cd3546a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c5704a1070f00a19b85f1bf8ccaae3b730362c4cfe521018df947b8cd3546a->enter($__internal_e2c5704a1070f00a19b85f1bf8ccaae3b730362c4cfe521018df947b8cd3546a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b3aaad3f1d81ea12c6c9205416569faecc784951a80bf46e2ce6854aaba107a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3aaad3f1d81ea12c6c9205416569faecc784951a80bf46e2ce6854aaba107a1->enter($__internal_b3aaad3f1d81ea12c6c9205416569faecc784951a80bf46e2ce6854aaba107a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b3aaad3f1d81ea12c6c9205416569faecc784951a80bf46e2ce6854aaba107a1->leave($__internal_b3aaad3f1d81ea12c6c9205416569faecc784951a80bf46e2ce6854aaba107a1_prof);

        
        $__internal_e2c5704a1070f00a19b85f1bf8ccaae3b730362c4cfe521018df947b8cd3546a->leave($__internal_e2c5704a1070f00a19b85f1bf8ccaae3b730362c4cfe521018df947b8cd3546a_prof);

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
", "base.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\base.html.twig");
    }
}
