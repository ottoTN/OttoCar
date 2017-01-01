<?php

/* compte/new.html.twig */
class __TwigTemplate_f15d5d9298b9d48f8b1998c2160605b2f68036d308638b36a1131c4616b3b786 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/new.html.twig", 1);
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
        $__internal_72603d08729107c83710bf6cad7587c0f15d20aa65c0289c36303e4980434bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72603d08729107c83710bf6cad7587c0f15d20aa65c0289c36303e4980434bc5->enter($__internal_72603d08729107c83710bf6cad7587c0f15d20aa65c0289c36303e4980434bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/new.html.twig"));

        $__internal_adbc7b84a3f9067c6ec0782fee2293d0ee069ad02fb73f877d4f52de7a056025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbc7b84a3f9067c6ec0782fee2293d0ee069ad02fb73f877d4f52de7a056025->enter($__internal_adbc7b84a3f9067c6ec0782fee2293d0ee069ad02fb73f877d4f52de7a056025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72603d08729107c83710bf6cad7587c0f15d20aa65c0289c36303e4980434bc5->leave($__internal_72603d08729107c83710bf6cad7587c0f15d20aa65c0289c36303e4980434bc5_prof);

        
        $__internal_adbc7b84a3f9067c6ec0782fee2293d0ee069ad02fb73f877d4f52de7a056025->leave($__internal_adbc7b84a3f9067c6ec0782fee2293d0ee069ad02fb73f877d4f52de7a056025_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d79f99f3e6532a2d0df7d41f6ecb1b4620f4127308d39616fd9d84ec6bd50267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d79f99f3e6532a2d0df7d41f6ecb1b4620f4127308d39616fd9d84ec6bd50267->enter($__internal_d79f99f3e6532a2d0df7d41f6ecb1b4620f4127308d39616fd9d84ec6bd50267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2154d9e382dbe13a0df19f9cc368975f77707c79de70be9d1eb202454bf2ac81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2154d9e382dbe13a0df19f9cc368975f77707c79de70be9d1eb202454bf2ac81->enter($__internal_2154d9e382dbe13a0df19f9cc368975f77707c79de70be9d1eb202454bf2ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row-fluid centre\">
        <div class=\"span10\">
            <div class=\"widget-box\">
                <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"fa fa-file-o\"></i> </span>
                    <h5>New Client</h5>
                </div>
                <div class=\"widget-content nopadding\">
<br>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        
        <div class=\"control-group\">
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinprop", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "C.I.N"));
        echo "
                            <div class=\"controls\">
                              ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinprop", array()), 'widget', array("attr" => array("class" => "cin")));
        echo "
                            </div>
                          </div>

                           <div class=\"control-group\">
                            <label class=\"control-label\">First name :</label>
                            <div class=\"controls\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomprop", array()), 'widget', array("attr" => array("class" => "span6", "placeholder" => "First name")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Last name :</label>
                            <div class=\"controls\">
                                
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomprop", array()), 'widget', array("attr" => array("class" => "span6", "placeholder" => "Last name")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Phone :</label>
                            <div class=\"controls\">
                                
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telprop", array()), 'widget', array("attr" => array("class" => "mask-phone span2 mask text ", "placeholder" => "22 33 66 44", "id" => "mask-phone")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Address :</label>
                            <div class=\"controls\">
                                
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseprop", array()), 'widget', array("attr" => array("class" => "span11", "placeholder" => "0 Street New York City")));
        echo "
                            </div>
                        </div>
                          <div class=\"control-group\">
                            <label class=\"control-label\">Email :</label>
                            <div class=\"controls\">
                              ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mailprop", array()), 'widget', array("attr" => array("class" => "span8 email", "placeholder" => "example example.com", "id" => "email", "name" => "email")));
        echo "
                            </div>
                          </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Car brand :</label>
                            <div class=\"controls\">
                                <select id=\"cars\" required></select>
                                
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Car version :</label>
                            <div class=\"controls\">
                                <select id=\"versions\" required></select>
                                
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Plate License :</label>
                            <div class=\"controls\">
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "immatvoit", array()), 'widget', array("attr" => array("class" => "span6 mask-plate")));
        echo "
                            </div>
                        </div>

        <input type=\"submit\" class=\"btn btn-success\" value=\"Create\" />
    ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<br>
        


</div></div></div>


";
        
        $__internal_2154d9e382dbe13a0df19f9cc368975f77707c79de70be9d1eb202454bf2ac81->leave($__internal_2154d9e382dbe13a0df19f9cc368975f77707c79de70be9d1eb202454bf2ac81_prof);

        
        $__internal_d79f99f3e6532a2d0df7d41f6ecb1b4620f4127308d39616fd9d84ec6bd50267->leave($__internal_d79f99f3e6532a2d0df7d41f6ecb1b4620f4127308d39616fd9d84ec6bd50267_prof);

    }

    public function getTemplateName()
    {
        return "compte/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 76,  142 => 71,  119 => 51,  110 => 45,  100 => 38,  90 => 31,  80 => 24,  70 => 17,  65 => 15,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"row-fluid centre\">
        <div class=\"span10\">
            <div class=\"widget-box\">
                <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"fa fa-file-o\"></i> </span>
                    <h5>New Client</h5>
                </div>
                <div class=\"widget-content nopadding\">
<br>
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}} ) }}
        
        <div class=\"control-group\">
                            {{ form_label(form.cinprop, \"C.I.N\", {'label_attr': {'class': 'control-label'}}) }}
                            <div class=\"controls\">
                              {{ form_widget(form.cinprop, {'attr': {'class': 'cin'}}) }}
                            </div>
                          </div>

                           <div class=\"control-group\">
                            <label class=\"control-label\">First name :</label>
                            <div class=\"controls\">
                                {{ form_widget(form.prenomprop, {'attr': {'class' : 'span6','placeholder': 'First name'} } ) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Last name :</label>
                            <div class=\"controls\">
                                
                                {{ form_widget(form.nomprop, {'attr': {'class' : 'span6','placeholder': 'Last name'} } ) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Phone :</label>
                            <div class=\"controls\">
                                
                                {{ form_widget(form.telprop, {'attr': {'class' : 'mask-phone span2 mask text ','placeholder': '22 33 66 44','id' : 'mask-phone'} } ) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Address :</label>
                            <div class=\"controls\">
                                
                                {{ form_widget(form.adresseprop, {'attr': {'class' : 'span11','placeholder': '0 Street New York City'} } ) }}
                            </div>
                        </div>
                          <div class=\"control-group\">
                            <label class=\"control-label\">Email :</label>
                            <div class=\"controls\">
                              {{ form_widget(form.mailprop, {'attr': {'class' : 'span8 email','placeholder': 'example example.com' ,'id': 'email','name': 'email'} } ) }}
                            </div>
                          </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Car brand :</label>
                            <div class=\"controls\">
                                <select id=\"cars\" required></select>
                                
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Car version :</label>
                            <div class=\"controls\">
                                <select id=\"versions\" required></select>
                                
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Plate License :</label>
                            <div class=\"controls\">
                                {{ form_widget(form.immatvoit, {'attr': {'class' : 'span6 mask-plate'}},{'attr':{'placeholder': 'Plate Number'}},{'attr':{'id': 'mask-plate'} } ) }}
                            </div>
                        </div>

        <input type=\"submit\" class=\"btn btn-success\" value=\"Create\" />
    {{ form_end(form) }}

<br>
        


</div></div></div>


{% endblock %}

", "compte/new.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar\\app\\Resources\\views\\compte\\new.html.twig");
    }
}
