<?php

/* employe/new.html.twig */
class __TwigTemplate_c69a3a21a76fdadd1f1e5da59336910a7c2b44109ba7ceeb4d18a6881baf3c3c extends Twig_Template
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
        $__internal_b5c1b9411ac683826c4ff6b881128bd66773c9b7633c7620abfe8c50d84e22b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c1b9411ac683826c4ff6b881128bd66773c9b7633c7620abfe8c50d84e22b0->enter($__internal_b5c1b9411ac683826c4ff6b881128bd66773c9b7633c7620abfe8c50d84e22b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $__internal_c319fb83435275a79601b5afe07f58dcedab77a7e6a18e3d19c24a003dfcebb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c319fb83435275a79601b5afe07f58dcedab77a7e6a18e3d19c24a003dfcebb8->enter($__internal_c319fb83435275a79601b5afe07f58dcedab77a7e6a18e3d19c24a003dfcebb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5c1b9411ac683826c4ff6b881128bd66773c9b7633c7620abfe8c50d84e22b0->leave($__internal_b5c1b9411ac683826c4ff6b881128bd66773c9b7633c7620abfe8c50d84e22b0_prof);

        
        $__internal_c319fb83435275a79601b5afe07f58dcedab77a7e6a18e3d19c24a003dfcebb8->leave($__internal_c319fb83435275a79601b5afe07f58dcedab77a7e6a18e3d19c24a003dfcebb8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd1fb3b898d2638af61d155f4e904ba408d31314d19fc8f405647e12c7d08397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1fb3b898d2638af61d155f4e904ba408d31314d19fc8f405647e12c7d08397->enter($__internal_bd1fb3b898d2638af61d155f4e904ba408d31314d19fc8f405647e12c7d08397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_445a5d46cc0f8b8b1bbc030d50291c1a2ca00b27b648b37a1d9d391ef37f2315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445a5d46cc0f8b8b1bbc030d50291c1a2ca00b27b648b37a1d9d391ef37f2315->enter($__internal_445a5d46cc0f8b8b1bbc030d50291c1a2ca00b27b648b37a1d9d391ef37f2315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_445a5d46cc0f8b8b1bbc030d50291c1a2ca00b27b648b37a1d9d391ef37f2315->leave($__internal_445a5d46cc0f8b8b1bbc030d50291c1a2ca00b27b648b37a1d9d391ef37f2315_prof);

        
        $__internal_bd1fb3b898d2638af61d155f4e904ba408d31314d19fc8f405647e12c7d08397->leave($__internal_bd1fb3b898d2638af61d155f4e904ba408d31314d19fc8f405647e12c7d08397_prof);

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
", "employe/new.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\employe\\new.html.twig");
    }
}
