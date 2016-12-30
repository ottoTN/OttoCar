<?php

/* compte/edit.html.twig */
class __TwigTemplate_8c3d58c4a8841d26cb769d8206f56e59e05281d10bc05662416ce4332a34a9a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/edit.html.twig", 1);
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
        $__internal_c2aa0ed8a7b9346b712b6f8aa275081389448a6bef9ff6887e505889d51c147b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2aa0ed8a7b9346b712b6f8aa275081389448a6bef9ff6887e505889d51c147b->enter($__internal_c2aa0ed8a7b9346b712b6f8aa275081389448a6bef9ff6887e505889d51c147b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/edit.html.twig"));

        $__internal_21151fd0ee4e8ecc3af2b5c4211cc031624c4c71bb5b1914a8be535b264d6634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21151fd0ee4e8ecc3af2b5c4211cc031624c4c71bb5b1914a8be535b264d6634->enter($__internal_21151fd0ee4e8ecc3af2b5c4211cc031624c4c71bb5b1914a8be535b264d6634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2aa0ed8a7b9346b712b6f8aa275081389448a6bef9ff6887e505889d51c147b->leave($__internal_c2aa0ed8a7b9346b712b6f8aa275081389448a6bef9ff6887e505889d51c147b_prof);

        
        $__internal_21151fd0ee4e8ecc3af2b5c4211cc031624c4c71bb5b1914a8be535b264d6634->leave($__internal_21151fd0ee4e8ecc3af2b5c4211cc031624c4c71bb5b1914a8be535b264d6634_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c1738a7f6b5b345540da36019afe6b02418aed3415ce52252e211ab145a74a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1738a7f6b5b345540da36019afe6b02418aed3415ce52252e211ab145a74a3->enter($__internal_7c1738a7f6b5b345540da36019afe6b02418aed3415ce52252e211ab145a74a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a84ca552392bcfd5f37631200816bd2f0246dfdd44dfe616689efb8c4f55b1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84ca552392bcfd5f37631200816bd2f0246dfdd44dfe616689efb8c4f55b1c3->enter($__internal_a84ca552392bcfd5f37631200816bd2f0246dfdd44dfe616689efb8c4f55b1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Compte edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a84ca552392bcfd5f37631200816bd2f0246dfdd44dfe616689efb8c4f55b1c3->leave($__internal_a84ca552392bcfd5f37631200816bd2f0246dfdd44dfe616689efb8c4f55b1c3_prof);

        
        $__internal_7c1738a7f6b5b345540da36019afe6b02418aed3415ce52252e211ab145a74a3->leave($__internal_7c1738a7f6b5b345540da36019afe6b02418aed3415ce52252e211ab145a74a3_prof);

    }

    public function getTemplateName()
    {
        return "compte/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Compte edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('compte_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "compte/edit.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\compte\\edit.html.twig");
    }
}
