<?php

/* piece/new.html.twig */
class __TwigTemplate_3c6f1aedb10d02904283bcb3d19cfe261524fc4b18c443ba4a58bc7384fc74e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "piece/new.html.twig", 1);
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
        $__internal_6be8da52557591216b63caabb0184ca240be4d3e94ba314013b501766546905f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be8da52557591216b63caabb0184ca240be4d3e94ba314013b501766546905f->enter($__internal_6be8da52557591216b63caabb0184ca240be4d3e94ba314013b501766546905f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/new.html.twig"));

        $__internal_ed2067cfe5b3f065994fe2050cdee1e39af4da75adcd42cbc0e97602b73a1bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2067cfe5b3f065994fe2050cdee1e39af4da75adcd42cbc0e97602b73a1bac->enter($__internal_ed2067cfe5b3f065994fe2050cdee1e39af4da75adcd42cbc0e97602b73a1bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6be8da52557591216b63caabb0184ca240be4d3e94ba314013b501766546905f->leave($__internal_6be8da52557591216b63caabb0184ca240be4d3e94ba314013b501766546905f_prof);

        
        $__internal_ed2067cfe5b3f065994fe2050cdee1e39af4da75adcd42cbc0e97602b73a1bac->leave($__internal_ed2067cfe5b3f065994fe2050cdee1e39af4da75adcd42cbc0e97602b73a1bac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8e7fa4fd0af33af22b23f1d7c9155419fdf5094eb3233dc68448bb5cf66be68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e7fa4fd0af33af22b23f1d7c9155419fdf5094eb3233dc68448bb5cf66be68->enter($__internal_f8e7fa4fd0af33af22b23f1d7c9155419fdf5094eb3233dc68448bb5cf66be68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4757a80ac34814f162ef83c372015639a3e11bda6d36097863e1425e8205eaf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4757a80ac34814f162ef83c372015639a3e11bda6d36097863e1425e8205eaf3->enter($__internal_4757a80ac34814f162ef83c372015639a3e11bda6d36097863e1425e8205eaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Piece creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4757a80ac34814f162ef83c372015639a3e11bda6d36097863e1425e8205eaf3->leave($__internal_4757a80ac34814f162ef83c372015639a3e11bda6d36097863e1425e8205eaf3_prof);

        
        $__internal_f8e7fa4fd0af33af22b23f1d7c9155419fdf5094eb3233dc68448bb5cf66be68->leave($__internal_f8e7fa4fd0af33af22b23f1d7c9155419fdf5094eb3233dc68448bb5cf66be68_prof);

    }

    public function getTemplateName()
    {
        return "piece/new.html.twig";
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
    <h1>Piece creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('piece_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "piece/new.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\piece\\new.html.twig");
    }
}
