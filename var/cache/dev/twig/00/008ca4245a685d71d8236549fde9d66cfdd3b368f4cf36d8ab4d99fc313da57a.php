<?php

/* base.html.twig */
class __TwigTemplate_efbafdc96e0a2a4811c5bc93844a94b3de6dd625fcdf5c6051c736d9de75aaf0 extends Twig_Template
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
        $__internal_266eeb3a380dbd0d67dbc173746d4bfd406ff6f066d817a99c8240b158669cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266eeb3a380dbd0d67dbc173746d4bfd406ff6f066d817a99c8240b158669cde->enter($__internal_266eeb3a380dbd0d67dbc173746d4bfd406ff6f066d817a99c8240b158669cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3dca6a380ad07cc748d5af2d575b0d1ed1e2e9fc2974947b1ffbf02abd2a25c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dca6a380ad07cc748d5af2d575b0d1ed1e2e9fc2974947b1ffbf02abd2a25c0->enter($__internal_3dca6a380ad07cc748d5af2d575b0d1ed1e2e9fc2974947b1ffbf02abd2a25c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_266eeb3a380dbd0d67dbc173746d4bfd406ff6f066d817a99c8240b158669cde->leave($__internal_266eeb3a380dbd0d67dbc173746d4bfd406ff6f066d817a99c8240b158669cde_prof);

        
        $__internal_3dca6a380ad07cc748d5af2d575b0d1ed1e2e9fc2974947b1ffbf02abd2a25c0->leave($__internal_3dca6a380ad07cc748d5af2d575b0d1ed1e2e9fc2974947b1ffbf02abd2a25c0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_54c2c91e9eef386411237f7878b54ca5c70fbfbca595056649dbc2940e82b8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c2c91e9eef386411237f7878b54ca5c70fbfbca595056649dbc2940e82b8f9->enter($__internal_54c2c91e9eef386411237f7878b54ca5c70fbfbca595056649dbc2940e82b8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c985d54cfaeb59ccbb6f1fd99121f71d395a08da3aa5c4cc624745140daf6c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c985d54cfaeb59ccbb6f1fd99121f71d395a08da3aa5c4cc624745140daf6c7c->enter($__internal_c985d54cfaeb59ccbb6f1fd99121f71d395a08da3aa5c4cc624745140daf6c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c985d54cfaeb59ccbb6f1fd99121f71d395a08da3aa5c4cc624745140daf6c7c->leave($__internal_c985d54cfaeb59ccbb6f1fd99121f71d395a08da3aa5c4cc624745140daf6c7c_prof);

        
        $__internal_54c2c91e9eef386411237f7878b54ca5c70fbfbca595056649dbc2940e82b8f9->leave($__internal_54c2c91e9eef386411237f7878b54ca5c70fbfbca595056649dbc2940e82b8f9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16998bae7b49ff351838e733319c6b45be3e6d27a5c4168c304effc359faa59f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16998bae7b49ff351838e733319c6b45be3e6d27a5c4168c304effc359faa59f->enter($__internal_16998bae7b49ff351838e733319c6b45be3e6d27a5c4168c304effc359faa59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d985991209ced47f1876ec3c1a0fa31b6caea182fa7c730d7fc6a16d092e1977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d985991209ced47f1876ec3c1a0fa31b6caea182fa7c730d7fc6a16d092e1977->enter($__internal_d985991209ced47f1876ec3c1a0fa31b6caea182fa7c730d7fc6a16d092e1977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d985991209ced47f1876ec3c1a0fa31b6caea182fa7c730d7fc6a16d092e1977->leave($__internal_d985991209ced47f1876ec3c1a0fa31b6caea182fa7c730d7fc6a16d092e1977_prof);

        
        $__internal_16998bae7b49ff351838e733319c6b45be3e6d27a5c4168c304effc359faa59f->leave($__internal_16998bae7b49ff351838e733319c6b45be3e6d27a5c4168c304effc359faa59f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dddb5baa0015d2319be942d4e4838d4c81b60366ad1c41188dc063bcf2184aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dddb5baa0015d2319be942d4e4838d4c81b60366ad1c41188dc063bcf2184aa->enter($__internal_9dddb5baa0015d2319be942d4e4838d4c81b60366ad1c41188dc063bcf2184aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae6b9632921899f0bc57110dda3b030b5f17247d7c5859a0ecdd5fc14bc6d18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6b9632921899f0bc57110dda3b030b5f17247d7c5859a0ecdd5fc14bc6d18d->enter($__internal_ae6b9632921899f0bc57110dda3b030b5f17247d7c5859a0ecdd5fc14bc6d18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae6b9632921899f0bc57110dda3b030b5f17247d7c5859a0ecdd5fc14bc6d18d->leave($__internal_ae6b9632921899f0bc57110dda3b030b5f17247d7c5859a0ecdd5fc14bc6d18d_prof);

        
        $__internal_9dddb5baa0015d2319be942d4e4838d4c81b60366ad1c41188dc063bcf2184aa->leave($__internal_9dddb5baa0015d2319be942d4e4838d4c81b60366ad1c41188dc063bcf2184aa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77ff2a5d1d062ef7f61ae247c3cf24ecb8929c34739a291a2473673eab8e55e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ff2a5d1d062ef7f61ae247c3cf24ecb8929c34739a291a2473673eab8e55e2->enter($__internal_77ff2a5d1d062ef7f61ae247c3cf24ecb8929c34739a291a2473673eab8e55e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6006e9b359e01c02221bfc83e025f08badd66f746bf60bb8c53d42d24dab1fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6006e9b359e01c02221bfc83e025f08badd66f746bf60bb8c53d42d24dab1fbd->enter($__internal_6006e9b359e01c02221bfc83e025f08badd66f746bf60bb8c53d42d24dab1fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6006e9b359e01c02221bfc83e025f08badd66f746bf60bb8c53d42d24dab1fbd->leave($__internal_6006e9b359e01c02221bfc83e025f08badd66f746bf60bb8c53d42d24dab1fbd_prof);

        
        $__internal_77ff2a5d1d062ef7f61ae247c3cf24ecb8929c34739a291a2473673eab8e55e2->leave($__internal_77ff2a5d1d062ef7f61ae247c3cf24ecb8929c34739a291a2473673eab8e55e2_prof);

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
", "base.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\base.html.twig");
    }
}
