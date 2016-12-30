<?php

/* employe/new.html.twig */
class __TwigTemplate_1cab504151dd2ec3d351a9cfa8fd45493b77e5f3096018f8c551df84ff443a2f extends Twig_Template
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
        $__internal_bf2e2d225d425dda3e8dbee074b28f72e25f3b64e9f499c1894f8a3325df0f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2e2d225d425dda3e8dbee074b28f72e25f3b64e9f499c1894f8a3325df0f18->enter($__internal_bf2e2d225d425dda3e8dbee074b28f72e25f3b64e9f499c1894f8a3325df0f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $__internal_c4962b323dc2d9afde45d2d444ee75584d26dee5290c72368ca6bc1b1307242c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4962b323dc2d9afde45d2d444ee75584d26dee5290c72368ca6bc1b1307242c->enter($__internal_c4962b323dc2d9afde45d2d444ee75584d26dee5290c72368ca6bc1b1307242c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf2e2d225d425dda3e8dbee074b28f72e25f3b64e9f499c1894f8a3325df0f18->leave($__internal_bf2e2d225d425dda3e8dbee074b28f72e25f3b64e9f499c1894f8a3325df0f18_prof);

        
        $__internal_c4962b323dc2d9afde45d2d444ee75584d26dee5290c72368ca6bc1b1307242c->leave($__internal_c4962b323dc2d9afde45d2d444ee75584d26dee5290c72368ca6bc1b1307242c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfe7d0fdfbe450d157f2e600e86dba32a70a3bde047af482953b30d57d85403a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe7d0fdfbe450d157f2e600e86dba32a70a3bde047af482953b30d57d85403a->enter($__internal_dfe7d0fdfbe450d157f2e600e86dba32a70a3bde047af482953b30d57d85403a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f74756d7cd2dd220870455b8fbdb34763bc4494655ace0db2455ddecba83188f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74756d7cd2dd220870455b8fbdb34763bc4494655ace0db2455ddecba83188f->enter($__internal_f74756d7cd2dd220870455b8fbdb34763bc4494655ace0db2455ddecba83188f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f74756d7cd2dd220870455b8fbdb34763bc4494655ace0db2455ddecba83188f->leave($__internal_f74756d7cd2dd220870455b8fbdb34763bc4494655ace0db2455ddecba83188f_prof);

        
        $__internal_dfe7d0fdfbe450d157f2e600e86dba32a70a3bde047af482953b30d57d85403a->leave($__internal_dfe7d0fdfbe450d157f2e600e86dba32a70a3bde047af482953b30d57d85403a_prof);

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
", "employe/new.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\employe\\new.html.twig");
    }
}
