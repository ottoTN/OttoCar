<?php

/* employe/new.html.twig */
class __TwigTemplate_e62e6c77dc2d51750e8846924ddccc5cb4c87f8197d788873add3d5b0fef6715 extends Twig_Template
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
        $__internal_53357c62df427f549297a38ea9d77f6442096e29add25b64e938081e33227180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53357c62df427f549297a38ea9d77f6442096e29add25b64e938081e33227180->enter($__internal_53357c62df427f549297a38ea9d77f6442096e29add25b64e938081e33227180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $__internal_8ea8826b843f1bab24fd029055304190703c7735965302b4b5e145d0f1a20790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea8826b843f1bab24fd029055304190703c7735965302b4b5e145d0f1a20790->enter($__internal_8ea8826b843f1bab24fd029055304190703c7735965302b4b5e145d0f1a20790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53357c62df427f549297a38ea9d77f6442096e29add25b64e938081e33227180->leave($__internal_53357c62df427f549297a38ea9d77f6442096e29add25b64e938081e33227180_prof);

        
        $__internal_8ea8826b843f1bab24fd029055304190703c7735965302b4b5e145d0f1a20790->leave($__internal_8ea8826b843f1bab24fd029055304190703c7735965302b4b5e145d0f1a20790_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a0b13439403d49f231a0e92abede5d635b8ea47916a4c9f4d2ad9c5202e3066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0b13439403d49f231a0e92abede5d635b8ea47916a4c9f4d2ad9c5202e3066->enter($__internal_0a0b13439403d49f231a0e92abede5d635b8ea47916a4c9f4d2ad9c5202e3066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e61f8883b16e5ef2f86df642fce12afa70045ed4c773ebfa393dd477c80fc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e61f8883b16e5ef2f86df642fce12afa70045ed4c773ebfa393dd477c80fc0c->enter($__internal_7e61f8883b16e5ef2f86df642fce12afa70045ed4c773ebfa393dd477c80fc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7e61f8883b16e5ef2f86df642fce12afa70045ed4c773ebfa393dd477c80fc0c->leave($__internal_7e61f8883b16e5ef2f86df642fce12afa70045ed4c773ebfa393dd477c80fc0c_prof);

        
        $__internal_0a0b13439403d49f231a0e92abede5d635b8ea47916a4c9f4d2ad9c5202e3066->leave($__internal_0a0b13439403d49f231a0e92abede5d635b8ea47916a4c9f4d2ad9c5202e3066_prof);

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
", "employe/new.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\app\\Resources\\views\\employe\\new.html.twig");
    }
}
